<?php

use Illuminate\Database\Seeder;
use App\Event;
use Carbon\Carbon;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([ 'title' => 'PHP 101', 'description' => 'Basic PHP training and seminar', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'in-coming']);
    }
}
