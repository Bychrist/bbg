@extends('layouts.user')

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
                                        <span class="small text-white stretched-link" >{{$news->count()}}</span>
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
@endsection
