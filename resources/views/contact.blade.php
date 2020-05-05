
@extends('layouts.app')

@section('content')

<section class="">
<div class="banner" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.66), rgba(11, 27, 252, 0.116)), url('{{asset("assets/images/slider/1.jpg")}}');height:500px;background-attachment:fixed">

        <div class="row">
            <div class="container">
                <div class="centerbanner">
                        <div class="wel">

                      
                           <center> <h3>Contact Us</h3></center>
                            <h1>
                                Contact BBG Team
                            </h1>
                     </div>
                </div>
            </div>
        </div>
   
   
    </div>
</section>





<section class="contact_us">
    <div class="container">
    <div class="row">
    <div class="col-md-4 col-sm-8 col-xs-12">
    <div class="sec-title">
    <h2>Get in <span>Touch</span></h2>
    </div>
 
    <br>
    <div class="default-cinfo">
    <div class="acc-content collapsed">
    <ul class="contact-infos">
    <li>
    <div class="icon_box">
    <i class="fa fa-map-marker"></i>
    </div>
    
    <div class="text-box">
    <p><b>Address:</b>
    <br> The British Business Group <br>
     David May Building <br>
     British Embassy Compound <br>
     AI Seef Road, Bur Dubai <br>
     Dubai <br>
     United Arab Emirates
     P.O Box 9333
    
    </p>
    </div>
    
    </li>
    <li>
    <div class="icon_box">
    <i class="fa fa-phone"></i>
    </div>
    
    <div class="text-box">
    <p><b>Call Us:</b>
    <br> <a href="tel:1234567890">+971 4 397 0303</a></p>
    </div>
    
    </li>
    <li>
    <div class="icon_box">
    <i class="fa fa-envelope"></i>
    </div>
    
    <div class="text-box">
    <p><b>Mail Us:</b>
    <br> <a href="mailto:yourmail@info.com">info@bbgdxb.com</a></p>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
    <div class="sec-title">
    <h2>Contact <span>Us</span></h2>
    </div>
    <div class="default-form-area">
    <form id="contact-form" name="contact_form" class="default-form" action="#" method="post" novalidate="novalidate">
    <div class="row clearfix">
    <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
    <input type="text" name="form_name" class="form-control" value="" placeholder="Name *" required="" aria-required="true">
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email *" required="" aria-required="true">
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
    </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
    <textarea name="form_message" class="form-control textarea required" placeholder="Message...." aria-required="true"></textarea>
    </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group m-0">
    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
    <button class="btn-style-one" type="submit" data-loading-text="Please wait...">send message</button>
    </div>
    </div>
    </div>
    </form>
    </div>

    </div>
    </div>
    </div>


</section>

<div class="map-section">
    <div class="map-outer">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.261774572598!2d55.304814314485576!3d25.261778035277818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43313bb87815%3A0x45123817e1462d03!2sBritish%20Embassy!5e0!3m2!1sen!2sng!4v1588706161698!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>



















@endsection