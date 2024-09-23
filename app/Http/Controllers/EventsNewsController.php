<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsNewsController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('start_time', '>', now())->take(5)->get();
        $pastEvents = Event::where('is_past', true)->take(5)->get();
        $news = News::orderBy('publish_date', 'desc')->take(5)->get();
        
        return view('library.events-news', compact('upcomingEvents', 'pastEvents', 'news'));
    }
    // public function eve(){
    //     $upcomingEve = Event::where('start_time', '>', now())
    //         ->orderBy('start_time')
    //         ->get();
        
    //     return view('library.events-news', compact('upcomingEve'));
    // }
}
