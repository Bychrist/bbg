@extends('layouts.app')

@section('content')
{{-- <div class="container  mybg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"  >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                               <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input   type="file" class="form-control" name="passport" required>

                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                div.card-body
            </div>
        </div>
    </div>
</div> --}}


<section class="loginsection">
     <div class="row">
       
             <div class="col-md-2"></div>
             <div class="col-md-8">

               

                    
                    <div class="disclaimer">
                        This area of our website is for individual or company who
                        wish to join BBG. If you would like to know more about becoming
                        a member please email us at  <strong>info@bbgdxb.com</strong> or go to <strong><a href="{{url('membership')}}">Membership</a></strong>
                   </div>

                    <div class="col-md-8 mx-auto  login wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">

                  
                      <div class="sec-title center">
                        <h2>Membership <span> Registration</span></h2>
                     </div>
                      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                           
                     <div class="row">
                       @csrf
                            <div class="col">
                                    <div class="form-group">
                                        <label for="name" style="font-size:12px;">Full Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="passport" style="font-size:12px;">Upload British Passport</label>
                                        <input id="passport"   type="file" class="form-control" name="passport" required>
                                    </div>

                                    
                                        
                                        <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                                {{ __('Register') }}
                                        </button>
                                
                                  
                            </div>
                            <div class="col">

                                   <div class="form-group">
                                        <label for="email" style="font-size:12px;">Email </label>
                                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                    <div class="form-group">    
                                        <label for="password">Password</label>
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <small class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                    <label for="">Confirm Password</label>
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                
                            </div>
                         

                     </div>
                       </form>
                         
                      
                  

                    </div>


             </div>
             <div class="col-md-2"></div>
        
     </div>
</section>






















@endsection
