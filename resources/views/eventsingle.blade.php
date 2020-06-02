
@extends('layouts.app')

@section('content')

<section class="">
<div class="banner" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.66), rgba(11, 27, 252, 0.116)), url('{{asset("assets/images/slider/1.jpg")}}');height:500px;background-attachment:fixed">

        <div class="row">
            <div class="container">
                <div class="centerbanner">
                        <div class="wel">

                      
                            <h3 class="text-center">Our Upcoming Events</h3>
                            <h1 class="text-center">
                                 About Upcoming BBG  Events
                            </h1>
                     </div>
                </div>
            </div>
        </div>
   
   
    </div>
</section>


<section class="working-process padd-1">
    <div class="container">
    
        <div class="sec-title center welwel">
            <h2>{{$event->Title}}</h2>
            
        </div>
        
        <div class="row paddMedia">
            
               
               

                                        
                                
                                        <div class="process-block  col-md-8 mx-auto col-sm-12 col-xs-12" style="margin-bottom:100px;" >
                                            <div  style="min-height:300px !important;padding:50px;" class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;padding-bottom:60px;padding-top:80px;">
                                                    <div class="count-box">
                                                    <div class="count">&nbsp;</div>
                                                    </div>
                                                
                                                    <div class="icon-box" style="margin-top: -20px;padding-left:20px">
                                                        <img  style="padding-right:20px;float:left; height:200px;" src="{{asset($event->Image)}}"/>
                                                    </div>
                                    
                                                    <h5><i class="fa fa-calendar" aria-hidden="true"></i> Date: {{date('F d, Y  g:iA', strtotime($event->EventDate))}} </h5>
                                                    <div class="service-text justifytxt" >
                                                     {!! $event->Description !!}
                                                           
                                                  
                                                    </div>

                                                    <a href="{{url('event')}}" class="btn btn-primary text-white"><i class="fa fa-arrow-left"></i> Back </a>
                                                    
                                            </div>
                                        </div>



                         

                    
        </div>


    </div>

 </section>



@include('_partialpartner')
    


@endsection



