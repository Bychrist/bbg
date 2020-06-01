@extends('layouts.admin')

@section('content')

  <div class="row"  >
            <div class="col-md-8 mx-auto" style="margin-top:50px;padding:50px 50px 50px 50px;background:transparent;" >
                @include('layouts.message')
               <div style="box-shadow: 3px -2px 4px 6px rgba(255,255,255,1);; background:rgba(255,255,255,0.9);padding:50px;    ">
                    <div class="row">
                        <table class="table table-striped table-responsive">
                              <tr>
                         
                                <td colspan="2"  > <center> <img src=" {{asset($user->personalImage)}}" style="width:100px;height:100px"  > </center>   </td>
                            </tr>
                        </table>
                        <div style="height:300px;overflow:scroll;width:100%">   
                                  <table class="table table-striped table-responsive">
                            
                          
                            <tr>
                                <td> <strong>Full Name:</strong>  </td>
                                <td> {{$user->user->name}}   </td>
                            </tr>
                            <tr>
                                <td> <strong>Email Address:</strong>  </td>
                                <td> {{$user->user->email}}   </td>
                            </tr>

                             <tr>
                                <td> <strong>Contact Number:</strong>  </td>
                                <td> {{$user->contactPhoneNumber}}   </td>
                            </tr>
                            <tr>
                                <td> <strong>Whatsapp Number:</strong>  </td>
                                <td> {{$user->whatsappNumber}}   </td>
                            </tr>
                            <tr>
                                <td> <strong>Membership Type:</strong>  </td>
                                <td> {{$user->membershipType}}   </td>
                            </tr>

                            <tr>
                                <td colspan="2"> <strong>Biography</strong>  </td>
                       
                            </tr>
                            <tr>
                                <td colspan="2"> {{$user->biography}} </td>
                       
                            </tr>
                            <tr>
                                <td colspan="2"><center> <strong>Company Details</strong></center>  </td>
                       
                            </tr>
                            
                       
                       </table>




                         <table class="table table-striped table-responsive">
                            
                          
                            <tr>
                                <td> <strong>Company Name:</strong>  </td>
                                <td> {{$user->companyName}} </td>
                            </tr>
                             <tr>
                                <td> <strong>Company Contact:</strong>  </td>
                                <td> {{$user->companyAddress}} </td>
                            </tr>
                             <tr>
                                <td> <strong>Company Website:</strong>  </td>
                                <td> {{$user->companyWebsite}} </td>
                            </tr>
                            <tr>
                                <td> <strong>Industry Type:</strong>  </td>
                                <td> {{$user->industryType}} </td>
                            </tr>
                             <tr>
                                <td> <strong>Position</strong>  </td>
                                <td> {{$user->position}} </td>
                            </tr>

                            <tr>
                                <td colspan="2"><center> <strong>Company Corporate Profile</strong></center>  </td>
                       
                            </tr>
                            <tr>
                                <td colspan="2"> {{$user->companyCorporateProfile}} </td>
                       
                            </tr>
                              <tr>
                                <td colspan="2" class="text-center"><b>Uploaded Passport</b></td>
                       
                            </tr>
                             <tr>
                                <td colspan="2"> 
                                   <center> <img src="{{asset($user->user->passport)}}" alt="{{$user->user->name}}" style="width:500px;height:500px;" ></center>
                                 </td>
                       
                            </tr>
                           
                           
                            
                       
                       </table>


                        
                        
                        </div>


                         
                         <div class="row">
                             <table class="table table-responsive">

                                <tr>
                                    <td style="text-align:right">
                                        <a href="{{url('/view/members')}}" class="btn btn-info" title="back to member list"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                                    </td>
                                    <td style="text-align:right">
                                          @if ($user->user->activated == 0)
                                              <a href="{{url('admin/activate/member/'.$user->user->activated.'/'.$user->user->id)}}" class="btn btn-warning text-white" title="Activate if record is good"><i class="fa fa-lock"></i>&nbsp;Activate</a>

                                          @elseif($user->user->activated == 1)
                                            <a href="{{url('admin/activate/member/'.$user->user->activated.'/'.$user->user->id)}}" class="btn btn-success text-white" title="Deactivate if record is wrong"><i class="fa fa-check"></i>&nbsp;Deactivate</a>

                                          @endif
                                    </td>
                                    <td style="text-align:right">
                                          <a href="{{url('admin/delete/user/'.$user->id)}}" class="btn btn-danger" title="Delete user if record is faulty" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                             
                             </table>
                         </div>
                     
                    </div>
              </div>
            

          
                 
                    
            </div>
        </div>
    





@endsection
