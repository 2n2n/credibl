<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use App\MemberEvents;

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

    function attendees($id) 
    {
        $attendees = Event::where(['id' => $id]);
        if( is_null($attendees->first() ) )
        {
            return response()->json([ 'attendees' => [] ]);
        }
        else
        {
            return response()->json(['attendees' => $attendees->first()->attendees->toJson()]);
        }
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
    	
        return response()->json($event->toArray());

    }

    // cancel event
    function destroy(Request $request, $event_id) 
    {
        $event = Event::find($id);
        if(is_null($event))
        {
            return response()->json(['Event does\'nt exist.']);
        }

        $event->status = $request->get('status');
        $event->save();

        return response()->json([ 'msg' => 'Successfully '. $request->get('status') ]);
    }

    function joinEvent(Request $request, $event_id) 
    {

        // request should have a contact number;
        $contact = $request->get('contact_no');

        $registree = MemberEvents::where(['event_id' => $event_id ]);

        if( is_null( $registree ) )
        {
            return response()->json(['Member does\'nt exist.']); 
        }
        
        MemberEvents::create(['event_id' => $event_id, 'member_id' => null, 'type' => 'guest', 'contact_no' => $contact]);

        return response()->json([ "msg" => 'success' ]); 
        
    }

    function complete(Request $request, $event_id)
    {
        // get post data of participant's contact no. and update status to completed
        $event = Event::whereIn('id', $event_id);
        dd($event->get());
    }

}
