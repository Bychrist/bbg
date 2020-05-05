
@extends('layouts.app')

@section('content')

<section class="">
<div class="banner" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.66), rgba(11, 27, 252, 0.116)), url('{{asset("assets/images/slider/1.jpg")}}');height:500px;background-attachment:fixed">

        <div class="row">
            <div class="container">
                <div class="centerbanner">
                        <div class="wel">

                      
                           <center> <h3>This  is British Business Group</h3></center>
                            <h1>
                                BBG Membership Directory
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

                    <div class="col-md-8 offset-md-2  login">

                  
                      <div class="sec-title center">
                        <h2>Member <span> Login</span></h2>
                        </div>

                        <form action="">
                            <div class="form-group">
                                <input type="email" class="form-control forminput" placeholder="please enter email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control forminput" placeholder="please enter password">
                            </div>

                            <input type="submit" class="submitbtn" value="Sign In">
                        </form>
                        <br>
                        <a href="">Forgot password</a>
                  

                    </div>


             </div>
             <div class="col-md-3"></div>
        
     </div>
</section>



@include('_partialpartner')


@endsection