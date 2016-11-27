<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class MemberEvents extends Model
{
    protected $table = 'userevents';

    protected $fillable = ['event_id', 'member_id', 'type', 'contact_no'];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}
