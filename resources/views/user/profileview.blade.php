@extends('layouts.user')

@section('content')

        <div class="row"  >
            <div class="col-md-8 mx-auto" style="margin-top:50px;padding:50px 50px 50px 50px;background:transparent;" >

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
                           
                            
                       
                       </table>


                        
                        
                        </div>
                     
                    </div>
              </div>
              {{-- <form method="post" action="{{url('create/profile')}}" enctype = "multipart/form-data"  >      
                 @csrf

                 @if($user->profile != null)
                    <input type="hidden" name="profileId" value="{{$user->profile->id}}" readonly >
                @else
                    <input type="hidden" name="profileId" value="0" readonly >
                 @endif
                    <div class="alert alert-dark">
                        <h6 class="text-justify">
                                Membership of the British Business Group is restricted to three 
                            categories, namely: 
                        </h6>
                            <ul>
                                <li>
                                        UK Citizen Member – Holder of a valid UK Passport
                                </li>
                                <li>
                                        UK Company Member – Manager of a UK company, operating in Nigeria (one 
                                        member per company)
                                </li>
                                <li>
                                        UK Distributor Member – Manager of a Nigerian company who act as 
                                    distributor or representative of a UK company, selling UK goods and/or 
                                    services in Nigeria (one member per company)
                                </li>
                                
                            </ul>
                            <p>
                                    To apply for membership, please complete the application form below and 
                            hit the 'SUBMIT' button.  Our membership team will contact you for 
                            further information in due course.
                            </p>
                            
                            
                            
                            
                            
                                                        
                
                        <center><small class="text-danger">  Please fill all fields provided </small></center>
                    </div>  
                   <div class="row">


                        <div class="col">
                            <div class="form-group" >
                                <label class="white">Full Name</label>
                                <input type="text" required  class="form-control" name="name" value="{{$user->name}}" >
                            </div>
                            <div class="form-group" >
                                <label class="white">Email Address</label>
                                <input type="email" readonly class="form-control" name="email" value="{{$user->email}}" >
                            </div>
                            <div class="form-group" >
                                <label class="white">Contact Phone</label>
                                <input type="text" required class="form-control" name="contactPhoneNumber"
                                 value="{{($user->profile != null) ? $user->profile->contactPhoneNumber : old('contactPhoneNumber') }}
                              
                                 " >
                            </div>
                           

                           





                        </div>


                        <div class="col">
                            <div class="form-group" >
                                <label class="white">Whatsapp Number </label>
                                <input required 
                                type="text" class="form-control"
                                 value="{{($user->profile != null) ? $user->profile->whatsappNumber : old('whatsappNumber') }}
                              
                                " 
                                name="whatsappNumber" >
                            </div>
                          
                            <div class="form-group" >
                                <label class="white">Personal Photo </label>
                                <input 
                                type="file" accept="image/*"
                                 class="form-control"
                                name="personalImage" >
                            </div>
                            <div class="form-group" >
                                <label class="white">Membership Type</label>

                                <select required name="membershipType" id="" class="form-control">
                                    @if($user->profile != null)
                                        <option value="{{$user->profile->membershipType}}">{{$user->profile->membershipType}}</option>
                                    @endif
                                    <option value="{{null }}">~ Select member type</option>
                                    <option value="UK Citizen Member">UK Citizen Member</option>
                                    <option value="UK Company Member ">UK Company Member </option>
                                    <option value="UK Distributor Member">UK Distributor Member</option>
                                </select>
                            </div>

                              

                        </div>

                        <div class="col">
                            <div class="form-group">
                            <label for="" class="white">Biography</label>
                            <textarea required name="biography"  maxlength="200" id="" cols="30" rows="5" class="form-control">{{($user->profile != null) ? $user->profile->biography : old('biography') }}
                                
                            </textarea>
                        </div>
                        
                        
                    </div>
                        



                   
                   </div>
                    <div class="row">
                        <div class="alert alert-dark">
                            <h6 class="text-justify">
                                    If you wish to advertise your company on the BBG website, please also 
                                    complete the following company details.
                            </h6>
                        </div>
                    </div>
                   

                     <div class="row">


                        <div class="col">
                             <div class="form-group" >
                                    <label class="white">Company Name </label>
                                    <input type="text" value="{{($user->profile != null) ? $user->profile->companyName : old('companyName') }}"
                                     class="form-control"
                                      name="companyName" >
                                </div>
                                <div class="form-group" >
                                    <label class="white"> Company Address </label>
                                    <input type="text" style="text-align:left;padding-left:0px;"
                                    value="{{($user->profile != null) ? $user->profile->companyAddress : old('companyAddress') }}" 
                                    class="form-control" name="companyAddress" >
                            </div>

                            <div class="form-group" >
                                    <label class="white"> Position In Company </label>
                                    <input type="text" class="form-control" name="position" 

                                     value="{{($user->profile != null) ? $user->profile->position : old('position') }}"
                                    >
                            </div>

                           
                        </div>


                        <div class="col">
                             <div class="form-group" >
                                    <label class="white">Industry Types</label>
                                    <input type="text" placeholder="enter industry with separated comma(,)" class="form-control" name="industryType"
                                     value="{{($user->profile != null) ? $user->profile->industryType : old('industryType') }}" >
                                </div>

                                <div class="form-group" >
                                    <label class="white">Website </label>
                                    <input type="url" class="form-control" name="companyWebsite"
                                     value="{{($user->profile != null) ? $user->profile->companyWebsite : old('companyWebsite') }}" >
                               </div>

                              

                        </div>

                        <div class="col">
                            <div class="form-group">
                            <label for="" class="white">Company Profile</label>
                            <textarea name="companyCorporateProfile" maxlength="200" id="" cols="30" rows="5" class="form-control">{{($user->profile != null) ? $user->profile->companyCorporateProfile : old('companyCorporateProfile') }}
                            </textarea>
                        </div>
                        
                        
                    </div>

                     
                       
                   </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                
            </form> --}}
                 
                    
            </div>
        </div>

@endsection