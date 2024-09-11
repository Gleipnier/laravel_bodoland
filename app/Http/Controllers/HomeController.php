<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Information;
use App\Models\Documents;
use App\Models\SportsOfficer;

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
                $services = Service::all();
                return view('home.homepage', compact('services'));
            }
            else if($usertype=='admin')
            {
                return view('admin.index', compact('services'));
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
        
        $services = Service::all();
        return view('home.homepage', compact('services'));
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