<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Information;
use App\Models\Documents;
use App\Models\SportsOfficer;
use App\Models\LatestUpdate;
use App\Models\Event;
use App\Models\News;
use App\Models\Gallery;
use App\Models\WhoIsWho;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                $latestUpdates = LatestUpdate::all();
                $services = Service::all();
                return view('home.homepage', compact('services', 'latestUpdates'));
            }
            else if($usertype=='admin')
            {
                return view('admin.index');
            }
            else {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view("post");
    }

    public function homepage()
    {
        $latestUpdates = LatestUpdate::all();
        $services = Service::all();
        return view('home.homepage', compact('services', 'latestUpdates'));
    }

    public function newHome()
    {

        $events = Event::all();
        $news = News::all();
        $galleries = Gallery::all();
        $whoIsWhos = WhoIsWho::all();

        return view("home.newHome")->with('events', $events)->with('news', $news)->with('galleries', $galleries)->with('whoIsWhos', $whoIsWhos);
        //return view("home")->with('events', $events)->with('news', $news)->with('galleries', $galleries)->with('whoIsWhos', $whoIsWhos);
    }

    public function UpcomingEvents()
    {
        $events = Event::all();
        return view("event")->with('events', $events);
    }

    public function RecentNews()
    {
        $news = News::all();
        return view("news")->with('news', $news);
    }

    public function WhoIsWho()
    {
        $whoIsWhos = WhoIsWho::all();
        return view("whoswho")->with('whoIsWhos', $whoIsWhos);
    }
    


    // public function showInformation() {
    //     $information = Information::all(); 
    //     return view('your_view_name', compact('information'));
    // }
    // public function showDocument() {
    //     $document = Documents::all(); 
    //     return view('your_view_name', compact('document'));
    // }
    // public function showOfficers() {
    //     $officers = SportsOfficer::all(); 
    //     return view('your_view_name', compact('officers'));
    // }
    
}