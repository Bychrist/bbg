@extends('layouts.admin')

@section('content')
 <div class="row p-5">
    <div class="col-xl-12 col-md-12">
        <div class="cardtext-white mb-4">
                @include('layouts.message')
               <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Activated</th>
                                                <th>Date Registered</th>
                                                <th>View Profile</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Activated</th>
                                                <th>Date Registered</th>
                                                <th>View Profile</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                         @foreach ($users as $user)
                                                <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td> <input type="checkbox" disabled
                                                     {{($user->activated) ? "checked" :"" }}   
                                                     title="{{($user->activated) ?  $user->name .' is activated' :  
                                                     $user->name . ' is not activated' }}" > 
                                               </td>
                                                <td>{{$user->created_at}}</td>
                                                <td> <a  class="btn btn-primary" href="{{url('admin/view/profile/' . $user->id  )}}" title="view member profile"> <i class="fa fa-eye"></i> </a> </td>
                                                <td><a href="" title="delete member profile" class="btn btn-danger"> <i class="fa fa-trash"> </i></a></td>
                                            </tr>
                                         @endforeach
                                         
                                           
                                          
                                        </tbody>
                                    </table>
            
        </div>
    </div>
                           
 </div>





@endsection
