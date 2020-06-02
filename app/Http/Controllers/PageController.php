<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
 
    public function Home()
    {
        $bbg_events = Event::orderBy('EventDate','desc')->take(2)->get();
        $bbg_news = News::orderBy('created_at','desc')->where('publish','on')->take(2)->get();
        return view('welcome',compact('bbg_events','bbg_news'));
    }

    public function About()
    {
        return view('about');
    }

    public function Event()
    {
     
        $bbg_events = Event::orderBy('EventDate','desc')->paginate(10);
        // dd($events);
        return view('event',compact('bbg_events'));
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
        $bbg_news = News::orderBy('created_at','desc')->where('publish','on')->take(3)->get();
        $bbg_articles = News::orderBy('created_at','desc')->where('publish','on')->paginate(10);
        $bbg_events = Event::orderBy('EventDate','desc')->take(3)->get();

        return view('news',compact('bbg_news','bbg_events','bbg_articles'));
    }

    public function NewsSingle($id)
    {
       try {
                $bbg_news = News::orderBy('created_at','desc')->where('publish','on')->take(3)->get();
                $new = News::where('id',$id)->firstOrFail();
                $bbg_events = Event::orderBy('EventDate','desc')->take(3)->get();
                return view('newssingle',compact('bbg_news','new','bbg_events'));
       } catch (\Throwable $th) {
           
                return redirect()->back();
       }
    }

    public function Contact()
    {
        return view('contact');
    }


    public function Membership()
    {
        return view('membership');
    }

    public function directory()
    {
        return view('directory');
    }


}
