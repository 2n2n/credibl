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
    }
}
