
@extends('layouts.app')

@section('content')

<section class="">
<div class="banner" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.66), rgba(11, 27, 252, 0.116)), url('{{asset("assets/images/slider/1.jpg")}}');height:500px;background-attachment:fixed">

        <div class="row">
            <div class="container">
                <div class="centerbanner">
                        <div class="wel">

                      
                           <center> <h3>Latest News</h3></center>
                            <h1>
                                {{$new->title}}
                            </h1>
                     </div>
                </div>
            </div>
        </div>
   
   
    </div>
</section>





<div class="inner-banner has-base-color-overlay text-center" style="background: url(assets/images/background/1.jpg);">
    {{-- <div class="container">
    <div class="box">
    
    </div>
    
    </div> --}}
    
    </div>
    
    
  
    
    <div class="sidebar-page-container">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 m-order-2">
    <section class="blog-section padd-2 m-padd-0">
 
            <div class="large-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="img-box">
                     @if($new->featuredImage == null)
                            <img  style="padding-right:20px;float:; max-height:440px;max-width:770px;"
                            src="{{  asset('assets/images/events/journal.jpg')   }}"/>
                            @elseif($new->featuredImage != null)
                                <img  style="padding-right:20px;float:left;max-width:770px; max-height:440px;"
                            src="{{  asset($new->featuredImage)   }}"/>
                    @endif
            </div>
            <div class="lower-content">
                <div class="post-meta">By {{$new->user->name}} / {{ date('F d, Y',  strtotime($new->created_at)) }}</div>
                <h4>
                    <a href="{{url('news/view/'.$new->id)}}">
                       {{$new->title}}
                    </a>
                </h4>
                <div class="text text-justify">
                      {!! $new->body   !!}
                 
                </div>
             
            </div>
        </div>
 

    </section>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 m-order-1">
    <div class="blog-sidebar padd-4">
    <div class="sidebar_search sidebar-padd mar-1">
    <form action="#">
    <input type="text" placeholder="Search....">
    <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    </div>
    
  
     
    <div class="popular_news sidebar-padd mar-1">
    <div class="inner-title">
    <h3>latest news</h3>
    </div>
    <div class="popular-post">

    @foreach ($bbg_news as $new)
          <div class="item">
            <div class="post-thumb">
                   @if($new->featuredImage == null)
                        <img  style="padding-right:20px;float:left;width:100px; height:100px;"src="{{  asset('assets/images/events/journal.jpg')   }}"/>
                    @elseif($new->featuredImage != null)
                        <img  style="padding-right:20px;float:left;width:100px; height:100px;"src="{{  asset($new->featuredImage)   }}"/>
                    @endif
            </div>
            <h4><a href="{{url('news/view/'.$new->id)}}">{{$new->title}}.</a></h4>
            <div class="post-info">{{ date('F d, Y', strtotime($new->created_at))   }}</div>
        </div>
         <br>
    @endforeach
  
  
  
    </div>
    </div>


      <div class="popular_news sidebar-padd mar-1">
    <div class="inner-title">
    <h3>Upcoming Events</h3>
    </div>
    <div class="popular-post">

    @foreach ($bbg_events as $event)
          <div class="item">
            <div class="post-thumb">
                   @if($event->Image == null)
                        <img  style="padding-right:20px;float:left;width:100px; height:100px;"src="{{  asset('assets/images/events/journal.jpg')   }}"/>
                    @elseif($event->Image != null)
                        <img  style="padding-right:20px;float:left;width:100px; height:100px;"src="{{  asset($event->Image)   }}"/>
                        br
                    @endif
            </div>
            <h4><a href="{{url('view/event/'.$event->id)}}">{{$event->Title}}.</a></h4>
            <div class="post-info">{{ date('F d, Y', strtotime($event->EventDate))   }}</div>
        </div>
         <br>
    @endforeach
  
  
  
    </div>
    </div>






 
    
    <br>
    <br>
    </div>
    
    </div>
    </div>
    </div>
    </div>




 @endsection