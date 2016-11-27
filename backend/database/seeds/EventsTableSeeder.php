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
        Event::create([ 'title' => 'PHP 101', 'description' => 'Basic PHP programming Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend erat eu leo scelerisque, ac aliquam ante lacinia. Aliquam erat volutpat. Curabitur ultricies, lacus non posuere maximus, neque neque fringilla nisl, fermentum dapibus est nibh sed nibh. Nunc a iaculis mi. Pellentesque porttitor justo sed ante pellentesque, id lobortis orci suscipit. Nullam quis condimentum nunc, at sodales lacus. Maecenas ut nulla et metus volutpat blandit sed ac magna. Ut nec mauris ac urna commodo venenatis sed in mauris. Nulla ornare vehicula neque, ac iaculis tortor tempus non. Sed nulla sapien, vulputate posuere rhoncus quis, varius aliquam nunc. Donec non ex sit amet justo suscipit commodo.', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'in-coming']);

        Event::create([ 'title' => 'Linux 101', 'description' => 'learn Basic Linux commands Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend erat eu leo scelerisque, ac aliquam ante lacinia. Aliquam erat volutpat. Curabitur ultricies, lacus non posuere maximus, neque neque fringilla nisl, fermentum dapibus est nibh sed nibh. Nunc a iaculis mi. Pellentesque porttitor justo sed ante pellentesque, id lobortis orci suscipit. Nullam quis condimentum nunc, at sodales lacus. Maecenas ut nulla et metus volutpat blandit sed ac magna. Ut nec mauris ac urna commodo venenatis sed in mauris. Nulla ornare vehicula neque, ac iaculis tortor tempus non. Sed nulla sapien, vulputate posuere rhoncus quis, varius aliquam nunc. Donec non ex sit amet justo suscipit commodo.', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'in-coming']);

        Event::create([ 'title' => 'Linux 101', 'description' => 'learn Basic Linux commands Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend erat eu leo scelerisque, ac aliquam ante lacinia. Aliquam erat volutpat. Curabitur ultricies, lacus non posuere maximus, neque neque fringilla nisl, fermentum dapibus est nibh sed nibh. Nunc a iaculis mi. Pellentesque porttitor justo sed ante pellentesque, id lobortis orci suscipit. Nullam quis condimentum nunc, at sodales lacus. Maecenas ut nulla et metus volutpat blandit sed ac magna. Ut nec mauris ac urna commodo venenatis sed in mauris. Nulla ornare vehicula neque, ac iaculis tortor tempus non. Sed nulla sapien, vulputate posuere rhoncus quis, varius aliquam nunc. Donec non ex sit amet justo suscipit commodo.', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'complete']);

        Event::create([ 'title' => 'Why Investing on banks are good', 'description' => 'In partnetship with Union Bank Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend erat eu leo scelerisque, ac aliquam ante lacinia. Aliquam erat volutpat. Curabitur ultricies, lacus non posuere maximus, neque neque fringilla nisl, fermentum dapibus est nibh sed nibh. Nunc a iaculis mi. Pellentesque porttitor justo sed ante pellentesque, id lobortis orci suscipit. Nullam quis condimentum nunc, at sodales lacus. Maecenas ut nulla et metus volutpat blandit sed ac magna. Ut nec mauris ac urna commodo venenatis sed in mauris. Nulla ornare vehicula neque, ac iaculis tortor tempus non. Sed nulla sapien, vulputate posuere rhoncus quis, varius aliquam nunc. Donec non ex sit amet justo suscipit commodo.', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'complete']);

        Event::create([ 'title' => 'Game Development for Entry Level Developers', 'description' => 'Sponsored by ManilaJS Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend erat eu leo scelerisque, ac aliquam ante lacinia. Aliquam erat volutpat. Curabitur ultricies, lacus non posuere maximus, neque neque fringilla nisl, fermentum dapibus est nibh sed nibh. Nunc a iaculis mi. Pellentesque porttitor justo sed ante pellentesque, id lobortis orci suscipit. Nullam quis condimentum nunc, at sodales lacus. Maecenas ut nulla et metus volutpat blandit sed ac magna. Ut nec mauris ac urna commodo venenatis sed in mauris. Nulla ornare vehicula neque, ac iaculis tortor tempus non. Sed nulla sapien, vulputate posuere rhoncus quis, varius aliquam nunc. Donec non ex sit amet justo suscipit commodo.', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'complete']);

        Event::create([ 'title' => 'From No to Go using Ruby on Rails', 'description' => 'How to make your dreams come true using Ruby on Rails Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend erat eu leo scelerisque, ac aliquam ante lacinia. Aliquam erat volutpat. Curabitur ultricies, lacus non posuere maximus, neque neque fringilla nisl, fermentum dapibus est nibh sed nibh. Nunc a iaculis mi. Pellentesque porttitor justo sed ante pellentesque, id lobortis orci suscipit. Nullam quis condimentum nunc, at sodales lacus. Maecenas ut nulla et metus volutpat blandit sed ac magna. Ut nec mauris ac urna commodo venenatis sed in mauris. Nulla ornare vehicula neque, ac iaculis tortor tempus non. Sed nulla sapien, vulputate posuere rhoncus quis, varius aliquam nunc. Donec non ex sit amet justo suscipit commodo.', 'address' => 'Makati', 'event_schedule' => Carbon::now(), 'status' => 'complete']);
    }
}


