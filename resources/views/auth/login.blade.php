


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
                                BBG Member Login
                            </h1>
                     </div>
                </div>
            </div>
        </div>
   
   
    </div>
</section>




<section class="loginsection">
     <div class="row">
       
             <div class="col-md-3"></div>
             <div class="col-md-6">

               

                    
                    <div class="disclaimer">
                        This area of our website is for individual or company members
                        of the BBG. If you would like to know more about becoming
                        a member please email us at  <strong>info@bbgdxb.com</strong> or go to <strong>Membership</strong>
                   </div>

                    <div class="col-md-8 offset-md-2  login wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">

                  
                      <div class="sec-title center">
                        <h2>Member <span> Login</span></h2>
                        </div>

                         <form method="POST" action="{{ route('login') }}">
                         @csrf
                            <div class="form-group">
                                <input type="email" class="form-control forminput" name="email" placeholder="please enter email">
                                    <small class="text-danger"> {{ $errors->first('email') }} </small>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control forminput" placeholder="please enter password">
                                <small class="text-danger"> {{ $errors->first('password') }} </small>
                            </div>

                            <input type="submit" class="submitbtn" value="Sign In">

                            <input style="margin-top:9px;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                    
                            @if (Route::has('password.request'))
                                <a style="color:#66c;font-size:12px" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                       
                    

                        </form>
                      
                  

                    </div>


             </div>
             <div class="col-md-3"></div>
        
     </div>
</section>



@include('_partialpartner')


@endsection