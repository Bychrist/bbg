@extends('layouts.app')

@section('content')

<section class="">
<div class="banner" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.66), rgba(11, 27, 252, 0.116)), url('{{asset("assets/images/slider/1.jpg")}}');height:500px;background-attachment:fixed">

        <div class="row">
            <div class="container">
                <div class="centerbanner">
                        <div class="wel">

                      
                            <h3 class="text-center">This  is British Business Group</h3>
                            <h1 class="text-center">
                                BBG Member Email verification
                            </h1>
                     </div>
                </div>
            </div>
        </div>
   
   
    </div>
</section>









<section class="loginsection" style="margin-bottom:100px">
     <div class="row">
       
             <div class="col-md-3"></div>
             <div class="col-md-6">

               
                    <div class="col-md-8 offset-md-2  login wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">

                  
                      <div class="sec-title center">
                        <h2>Member <span> Email Verification</span></h2>
                        </div>



            <div class="card">
                <div class="card-header" style="background:#045ac4;color:#fff">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>



        

                    </div>


             </div>
             <div class="col-md-3">
             
             </div>
        
     </div>
</section>



@endsection
