<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user =  Auth::user();

        if($user->role == "admin")
        {
            $v_members = User::where('activated', 1)->get();
            $r_members = User::where('role', 'user' )->get();
            $events = Event::all();
            $news = News::all();

            return view('admin.adminhome',compact('events','r_members','v_members','news'));
        }
        else{
            

           return  view('user.userhome');
        }
      
    }


}
