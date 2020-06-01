
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
            <h2>Upcoming <span>Events</span></h2>
        </div>
        
        <div class="row paddMedia">
            
               
               

               

                        @php
                            $i = 1;
                        @endphp
                        
                            @if (  count($events)  > 0)
                        
                                @foreach($events as $event)

                                        
                                
                                        <div class="process-block  col-md-6 col-sm-12 col-xs-12" >
                                            <div Id="{{$event->id}}" style="height:300px !important" class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;padding-bottom:60px;padding-top:80px;">
                                                    <div class="count-box">
                                                    <div class="count"><i class="fa fa-folder" ></i></div>
                                                    </div>
                                                
                                                
                                                    
                                                    <div class="icon-box" style="margin-top: -20px;padding-left:20px">
                                                        <img  style="padding-right:20px;float:left; height:200px;" src="{{asset($event->Image)}}"/>
                                                    </div>
                                                <p> <i class="fa fa-calendar" aria-hidden="true"></i> {{date('d-m-Y H:i:s', strtotime($event->EventDate))}}  </p> 
                                                    <h5>{{$event->Title}}</h5>
                                                    <div class="service-text justifytxt" >
                                                            @php
                                                                $description = strip_tags($event->Description)
                                                            @endphp
                                                          
                                                             {{  substr($description, 0, 200) }}
                                                  
                                                    </div>

                                                    @if (strlen($description) > 200)
                                                         <div id="readmore"> 
                                                            <a href="{{url('view/event/'. $event->id)}}" style="color:#fff" data-event-id="{{$event->id}}"  class="btn btn-primary" >Read More >>
                                                            </a>
                                                         </div>

                                                    @endif



                                       





                                                    
                                            </div>
                                        </div>



                                
                                @endforeach

                                <div class="col-md-2 mx-auto"> 
                                    <div class="text-center"> </div>
                                </div>

                                



                            @else 

                                <div style="" class="process-block  col-md-6 mx-auto col-sm-12 col-xs-12">
                                 <div style="padding-top:20px" class=" inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            
                                     <h1 class="text-center" style="font-size:15px">There are no events yet</h1>
                                    </div>
                                </div>


                            @endif

                    
        </div>


    </div>

 </section>



@include('_partialpartner')
    


@endsection



