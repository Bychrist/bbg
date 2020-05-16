<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function About()
    {
        return view('about');
    }

    public function Event()
    {
        $events = Event::latest()->paginate(2);
        return view('event',compact('events'));
    }


    public function EventShow($id)
    {
        try {
            $event = Event::find($id);
            return view('eventsingle', compact('event'));
        } catch (\Throwable $th) {
          
                return back();
        }
    }


    public function MemberLogin()
    {
        return view('memberlogin');
    }

    public function News()
    {
        return view('news');
    }

    public function Contact()
    {
        return view('contact');
    }


    public function Membership()
    {
        return view('membership');
    }


}
