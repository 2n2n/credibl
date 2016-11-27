<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Verb	URI	Action	Route Name
// GET	/photos	index	photos.index
// GET	/photos/create	create	photos.create
// POST	/photos	store	photos.store
// GET	/photos/{photo}	show	photos.show
// GET	/photos/{photo}/edit	edit	photos.edit
// PUT/PATCH	/photos/{photo}	update	photos.update
// DELETE	/photos/{photo}	destroy	photos.destroy

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::resource('/event', 'EventController', ['except' => ['create', 'edit'] ]);

Route::post('/event/join/{event_id}', 'EventController@joinEvent');
Route::get('/event/{id}/attendees', 'EventController@attendees');

Route::post('/event/{id}/complete', 'EventController@complete');

Route::get('/member', 'MemberController@info');
Route::get('/member/event/id', 'MmeberController@attended');
