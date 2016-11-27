<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function info($id)
    {
    	$member = Member::find(1);
    	if( is_null($member) ) 
    	{
    		return response()->json(['Member not found.']);
    	}
    	$data  = [
    		"info" => $member->first()->toArray(),
    		"events" => []
    	];

    	foreach( $member->events as $attended )
    	{
    		array_push($data['events'], $attended->event->toArray());
    	}


    	return response()->json(json_encode($data));
    }
}
