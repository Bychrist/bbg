<?php

namespace App\Http\Controllers;

use Image;
use App\Event;
use Illuminate\Http\Request;
use File;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at','desc')->paginate(10);
        return view('event.view_event', compact('events'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'Description'=>'required',
            'Title'=>'required | max:50',
            'EventDate'=>'required',
            'Image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $event = new Event;
        $event->Description = ucwords($request['Description']);
        $event->Title = ucwords($request['Title']);
        $event->EventDate = ucwords($request['EventDate']);
   

        if($request->file('Image'))
        {
                        
            $image = $request->file('Image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'assets/images/events/' . $filename;
          //  return $path;
            Image::make($image->getRealPath())->resize(400, 400)->save($path);
            $event->Image = 'assets/images/events/'.$filename;
        }
        $event->save();
        return redirect()->back()->with(['success'=>'Event was created successsfully']);


    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        try {
           $event = Event::find($id);
           return view('event.edit_event', compact('event'));
        } catch (\Throwable $th) {
            
            return redirect()->back()->with(["failure"=>$th->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        
       try {
                $this->validate($request,[
                    'Description'=>'required',
                    'Title'=>'required | max:50',
                    'EventDate'=>'required',
                    'Image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                $event = Event::find($id);
                $event->Description = ucwords($request['Description']);
                $event->Title = ucwords($request['Title']);
                $event->EventDate = ucwords($request['EventDate']);
        

                if($request->file('Image'))
                {
                    File::delete($event->Image);            
                    $image = $request->file('Image');
                    $filename = time() . '.' . $image->getClientOriginalExtension();
                    $path = 'assets/images/events/' . $filename;
                //  return $path;
                    Image::make($image->getRealPath())->resize(400, 400)->save($path);
                    $event->Image = 'assets/images/events/'.$filename;
                }
                $event->save();
                return redirect(url('view/events'))->with(['success'=>'Event was updated successsfully']);

       } catch (\Throwable $th) {
        return redirect()->back()->with(['failure'=> $th->getMessage()]);
       }


    }

   
    public function destroy($id)
    {
        try {
            $event  = Event::find($id);
            File::delete($event->Image);
            $event->delete();
            return redirect()->back()->with(["success"=>"Event deletion was successful"]);
        } catch (\Throwable $th) {
            return redirect()->back()->with(["failure"=> $th->getMessage() ]);
        }
    }
}

