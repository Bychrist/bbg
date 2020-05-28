<?php

namespace App\Http\Controllers\users;

use File;
use Image;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function UpdateProfile()
    {
        $user = Auth::user();
        return view('user.profileupdate',compact('user'));
    }

    public function CreateProfile(Request $request)
    {
     
       
     
        try
        {
                    if($request->profileId == 0)
                    {
                            
                        $this->validate($request,[
                            "name" => "required",
                            "contactPhoneNumber" => "required",
                            "whatsappNumber" => "required",
                            "membershipType" => "required",
                            "biography" =>"required",
                            "personalImage" =>"required"

                        ]);

                        $profile = new Profile;
                        $profile->user_id = Auth::User()->id;
                        $profile->whatsappNumber = $request->whatsappNumber;
                        $profile->biography = $request->biography;
                        $profile->contactPhoneNumber = $request->contactPhoneNumber;
                        $profile->membershipType = $request->membershipType;
                        $profile->companyName = $request->companyName;
                        $profile->companyAddress = $request->companyAddress;
                        $profile->position = $request->position;
                        $profile->industryType = $request->industryType;
                        $profile->companyWebsite = $request->companyWebsite;
                        $profile->companyCorporateProfile = $request->companyCorporateProfile;

                       
                        //image manipulation
                        $image = $request->personalImage;
                        $filename = time() . '.' . $image->getClientOriginalExtension();
                        $path = 'profiles/' . $filename;
                        Image::make($image->getRealPath())->resize(300, 300)->save($path);
                        $profile->personalImage = 'profiles/'.$filename;
                  
                        $profile->save();
                    

            
                        $user = User::where('id', Auth::User()->id)->first();
                        $user->name = $request->name;
                        $user->save();
                        return redirect()->back()->with(["success" => "profile was updated"]);
                

            

                    }

                    else
                    {

                            $this->validate($request,[
                                "name" => "required",
                                "contactPhoneNumber" => "required",
                                "whatsappNumber" => "required",
                                "membershipType" => "required",
                                "biography" =>"required",
                            ]);
                        
                            
                            $profile = Profile::findOrFail($request->profileId);
                            $profile->user_id = Auth::User()->id;
                            $profile->whatsappNumber = $request->whatsappNumber;
                            $profile->biography = $request->biography;
                            $profile->contactPhoneNumber = $request->contactPhoneNumber;
                            $profile->membershipType = $request->membershipType;
                            $profile->companyName = $request->companyName;
                            $profile->companyAddress = $request->companyAddress;
                            $profile->position = $request->position;
                            $profile->industryType = $request->industryType;
                            $profile->companyWebsite = $request->companyWebsite;
                            $profile->companyCorporateProfile = $request->companyCorporateProfile;

                         if($request->personalImage)
                           { //image manipulation
                            File::delete($profile->personalImage);      
                            $image = $request->personalImage;
                            $filename = time() . '.' . $image->getClientOriginalExtension();
                            $path = 'profiles/' . $filename;
                            Image::make($image->getRealPath())->resize(300, 300)->save($path);
                            $profile->personalImage = 'profiles/'.$filename;
                           }
                             $profile->save();
                        

                
                            $user = User::where('id', Auth::User()->id)->first();
                            $user->name = $request->name;
                            $user->save();
                            return redirect()->back()->with(["success" => "profile was updated"]);
                                    






                    }

        }
        catch (\Throwable $th)
        {
                 return redirect()->back()->with(["failure" => $th->getMessage()]);

        }







    }


    public function ViewProfile()
    {

        try {
            $user = Profile::where('user_id', Auth::User()->id)->firstOrFail();
            return view('user.profileview',compact('user'));
        } catch (\Throwable $th) {
            return redirect()->back()->with(["failure" => "You are yet to set a profile"]);
        }
       
    }




}

