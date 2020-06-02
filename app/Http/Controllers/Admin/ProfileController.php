<?php

namespace App\Http\Controllers\Admin;

use File;
use App\News;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
           // return "sadf";
           // $userAccount = User::findOrFail($id);
            $user = Profile::where('user_id', $id)->firstOrFail();

            return view('admin.adminShowProfile',compact('user'));

        } catch (\Throwable $th) {

            return redirect()->back()->with(["failure" =>  "User is yet to set up profile"] );

        }

    }

    public function Activate($activate, $id)
    {
           try {
               $user = User::findOrFail($id);
               if($activate == 0)
               {
                   $user->activated = 1;
               }
               elseif($activate == 1)
               {
                   $user->activated = 0;
               }

               $user->save();
               return redirect()->back()->with(["success" =>"User activation status has been changed" ]);

           } catch (\Throwable $th) {

           // return dd($th->getMessage());
              return redirect()->back()->with(["failure" => $th->getMessage() ]);
           }
    }


    public function DeleteUser($id)
    {
    
        try {
         
            $user = Profile::findOrFail($id);
            File::delete($user->personalImage);
            File::delete($user->user->passport);
  
            foreach($user->user->news as $news  )
            {
                $findNews = News::findOrFail($news->id);
                if($news->featuredImage != null)
                {
                    File::delete($news->featuredImage);
                }
                $findNews->delete();
                    
            }
            $user->delete();
            $user->user->delete();
       
            return redirect(url('view/members'))->with(["success" =>"All user records have been deleted" ]);

        } catch (\Throwable $th) {
           return $th->getMessage();
        }
    }











}
