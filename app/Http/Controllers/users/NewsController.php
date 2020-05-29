<?php

namespace App\Http\Controllers\users;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Image;
use File;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ViewNews()
    {
        if( Gate::allows('activatedUser',Auth::user()))
        {       $id = Auth::user()->id;
                $news = News::where('user_id',$id)->orderBy('created_at','desc')->paginate(10);
                return view('user.viewarticles', compact('news'));

        }

        else
        {
            return redirect()->back()->with(["failure" => "You are not activated to view your post"]);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateNews()
    {
        try 
        {
           if( Gate::allows('activatedUser',Auth::user()))
            {
                return  view('user.createnews')  ;

            }
            else
            {
                return redirect()->back()->with(["failure"=>"You are not activated to post news article"]);
            }

         
           
        } 
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["failure"=>$th->getMessage()]);
        }


    }

 
    public function StoreNews(Request $request)
    {

        $this->validate($request, [
            "body" => "required",
            "title" => "required",
            "featuredImage" => "mimes:jpeg,jpg,png,gif|max:20000"

        ]);


        if( Gate::allows('activatedUser',Auth::user()))
        {
            $news = new News();
            $news->body = $request->body;
            $news->publish = ($request->publish == null) ? "off" : $request->publish;
            $news->title = ucwords($request->title);
            $news->user_id = Auth::user()->id;
        
            if($request->featuredImage != null)
            {
                 //image manipulation
                 $image = $request->featuredImage;
                 $filename = time() . '.' . $image->getClientOriginalExtension();
                 $path = 'articles/' . $filename;
                 Image::make($image->getRealPath())->resize(300, 300)->save($path);
                 $news->featuredImage = 'articles/'.$filename;
            }


            $news->save();

            return redirect()->back()->with(["success"=>"Article was published"]);





        }
        else
        {
            return redirect()->back()->with(["failure"=>"You are not activated to post news article"]);
        }

    }

    


    public function UpdateNews($id)
    {
        if( Gate::allows('activatedUser',Auth::user()))
        {
           try {
                $userId = Auth::user()->id;
                $new = News::where('id',$id)->where('user_id',$userId)->firstOrFail();
                return view('user.updatearticles',compact('new'));

           } catch (\Throwable $th) {
               return redirect()->back()->with(["failure" => $th->getMessage()]);
           }
        }

        else{

            return redirect()->back()->with(["failure" => "you are not activated " ]);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateNewsArticle(Request $request, $id)
    {
        $this->validate($request, [
            "body" => "required",
            "title" => "required",
            "featuredImage" => "mimes:jpeg,jpg,png,gif|max:20000"

        ]);
        try {
            $userId = Auth::user()->id;
            $new = News::where('id',$id)->where('user_id',$userId)->firstOrFail();
            $new->title = ucwords($request->title);
            $new->body = $request->body;
            $new->publish = ($request->publish == null) ? "off" : $request->publish;

            if($request->featuredImage != null)
            {
                File::delete($new->featuredImage);
                 //image manipulation
                 $image = $request->featuredImage;
                 $filename = time() . '.' . $image->getClientOriginalExtension();
                 $path = 'articles/' . $filename;
                 Image::make($image->getRealPath())->resize(300, 300)->save($path);
                 $new->featuredImage = 'articles/'.$filename;
            }

            
            $new->save();

            return redirect()->back()->with(["success"=>"Article was updated"]);



        } catch (\Throwable $th) {
            return redirect()->back()->with(["failure"=>$th->getMessage()]);
        }
    }

  
  
    public function DeleteNewsArticle($id)
    {
        try {
        
            if( Gate::allows('activatedUser',Auth::user()))
            {

                $userId = Auth::user()->id;
                $new = News::where('id',$id)->where('user_id',$userId)->firstOrFail();
                File::delete($new->featuredImage);
                $new->delete();



                return redirect()->back()->with(["success" => "Your post was deleted"]);
            }
            else
            {
                return redirect()->back()->with(["failure" => "you are not activated to perform this task"]);
            }

        } catch (\Throwable $th) {
            
            return redirect()->back()->with(["failure" => $th->getMessage()  ] );
        }
    }
}
