<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
 
    public function Home()
    {
        $events = Event::orderBy('created_at','desc')->take(2)->get();
        $news = News::orderBy('created_at','desc')->where('publish','on')->take(2)->get();
        return view('welcome',compact('events','news'));
    }

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

    public function NewsSingle()
    {
        return "News single here";
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
