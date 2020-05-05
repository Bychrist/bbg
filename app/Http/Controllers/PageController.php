<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function About()
    {
        return view('about');
    }

    public function Event()
    {
        return view('event');
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
