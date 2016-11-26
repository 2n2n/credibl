<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use Validator;
use Carbon\Carbon;

use Illuminate\Http\Request;

class EventController extends Controller
{
    function index() 
    {
    	$events = Event::all();
    	if( $events->count() == 0 ) 
    	{ 
    		$events = 'no events yet.'; 
    	}
    	else 
    	{
    		$events = $events->toArray();
    	}

    	return response()->json($events);
    }

    function store(Request $request) 
    {
    	$rules = [
    		'title' => 'required',
    		'description' => 'required',
    		'co_host' => 'required',
    		'address' => 'required',
    		'event_schedule' => 'required'
    	];	

    	$validation = Validator::make($request->all(), $rules);
    	
    	if( $validation->fails() )
    	{
    		return response()->json(['errors' => $validation->messages()->all() ]);
    	}

    	return response()->json(['msg' => 'Successfully created event.']);
    }

    function show($event_id) 
    {
		$event = Event::find(1);
	
		if( is_null($event) )  
		{
			$event = 'No event doesn\'t exist.';
		}
		else 
		{
			$event = $event->toArray();
		}

    	return response()->json($event);
    }

    function update(Request $request, $id) 
    {
    	$event = Event::find($id);
    	if( is_null($event) ) 
    	{
    		return response()->json(['Event does\'nt exist.']);
    	}

    	$postdata = $request->all();
    	dd($postdata);

    }

    // cancel event
    function destroy() {}

}
