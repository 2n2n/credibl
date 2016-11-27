<?php

use Illuminate\Database\Seeder;
use App\MemberEvents;
class GuestEventSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberEvents::create(['event_id' => 1, 'member_id' => null, 'type' => 'guest', 'contact_no' => '09212118821']);

       	MemberEvents::create(['event_id' => 3, 'member_id' => 1, 'type' => 'member', 'contact_no' => '09121281828182']);

       	MemberEvents::create(['event_id' => 4, 'member_id' => 1, 'type' => 'member', 'contact_no' => '09121281828182']);

		MemberEvents::create(['event_id' => 5, 'member_id' => 1, 'type' => 'member', 'contact_no' => '09121281828182']);

		MemberEvents::create(['event_id' => 6, 'member_id' => 1, 'type' => 'member', 'contact_no' => '09121281828182']);

    }
}
