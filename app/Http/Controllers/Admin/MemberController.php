<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
  

    public function __construct()
    {
        $this->middleware('auth');
       
    }


    public function index()
    {
        $users = User::where('role','user')->orderBy('created_at','desc')->get();
        return view('admin.members_list', compact('users'));
    }


    public function destroy($id)
    {
        //
    }

    
}
