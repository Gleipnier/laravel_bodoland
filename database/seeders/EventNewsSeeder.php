<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventNewsSeeder extends Seeder
{
    public function run()
    {
        // Seed Events
        $events = [
            [
                'title' => 'Summer Reading Kickoff',
                'description' => 'Join us for the start of our summer reading program!',
                'start_time' => Carbon::now()->addDays(10)->setTime(14, 0),
                'end_time' => Carbon::now()->addDays(10)->setTime(16, 0),
                'location' => 'Main Library Auditorium',
                'is_past' => false
            ],
            [
                'title' => 'Author Talk: Jane Doe',
                'description' => 'Bestselling author Jane Doe discusses her latest novel.',
                'start_time' => Carbon::now()->subDays(5)->setTime(18, 30),
                'end_time' => Carbon::now()->subDays(5)->setTime(20, 0),
                'location' => 'Main Library Auditorium',
                'is_past' => true
            ],
            [
                'title' => 'Children\'s Story Time',
                'description' => 'Weekly story time for children ages 3-5.',
                'start_time' => Carbon::now()->addDays(3)->setTime(10, 0),
                'end_time' => Carbon::now()->addDays(3)->setTime(11, 0),
                'location' => 'Children\'s Reading Room',
                'is_past' => false
            ]
        ];

        foreach ($events as $event) {
            Event::create($event);
        }

        // Seed News
        $newsItems = [
            [
                'title' => 'Library Extends Opening Hours',
                'content' => 'Starting next month, the library will be open until 9 PM on weekdays.',
                'publish_date' => Carbon::now()->subDays(2)
            ],
            [
                'title' => 'New Online Resources Available',
                'content' => 'We\'ve added several new databases to our online collection. Check them out!',
                'publish_date' => Carbon::now()->subDays(7)
            ],
            [
                'title' => 'Library Renovation Project Completed',
                'content' => 'Our month-long renovation project has finished. Come see our updated spaces!',
                'publish_date' => Carbon::now()->subDays(14)
            ]
        ];

        foreach ($newsItems as $item) {
            News::create($item);
        }
    }
}
