<?php

use Illuminate\Database\Seeder;
use App\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = Member::create(['name' => 'Jeff Gawisan', 'email' => 'jeff.gawinsan@yahoo.com', 'contact' => '09121281828182' ]);
    }
}
