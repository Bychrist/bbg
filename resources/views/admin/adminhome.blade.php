@extends('layouts.admin')

@section('content')
 <div class="row p-5">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Verified Members</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span class="small text-white stretched-link" >{{$v_members->count()}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Registered Members</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span class="small text-white stretched-link" > {{$r_members->count()}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Posted News</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span class="small text-white stretched-link" > 20</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Posted Events</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span class="small text-white stretched-link">{{$events->count()}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>




<section class="" style="max-height:300px;overflow:hidden">
<div class="banner" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.66), rgba(11, 27, 252, 0.116)), url('{{asset("assets/images/slider/1.jpg")}}');height:500px;background-attachment:fixed">

        <div class="row">
            <div class="container">
                <div class="centerbanner">
                        <div class="wel" style="color:#fff; 
                               display: flex;
                        flex-direction: column;
                        flex-wrap: nowrap;
                        justify-content: flex-end;
                        align-items: center;
                        align-content: stretch;
                
                      ">

                            <br/>     <br/>     <br/>     <br/>     <br/>
                      
                           <h3 class="" >We Increase Your Network And Business Opportunities</h3>
                            <h1 class="">
                                BRITISH BUSINESS GROUP
                            </h1>
                     </div>
                </div>
            </div>
        </div>
   
   
    </div>
</section>
@endsection
