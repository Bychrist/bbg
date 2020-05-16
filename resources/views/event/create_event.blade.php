@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto  p-5">
            <div class="card shadow-lg border-0 rounded-lg ">
                <div class="card-header" style="padding:10px;height:50px;"><h3 style="font-size:12 !important;font-weight:bolder" class="text-center ">Create Event</h3></div>
                    <div class="card-body">
                        @include('layouts.message')
                        <form method="post" action="{{url('store/event')}}"  enctype="multipart/form-data"  >
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="title">Title</label>
                                <input class="form-control py-4" id="title" required name="Title" type="text" placeholder="Enter title" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="event_date">Event Date</label>
                                <input class="form-control py-4" id="event_date" name="EventDate" required type="datetime-local" placeholder="Choose date" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="event_date">Image</label>
                                <input class="form-control py-4" id="event_date" name="Image" type="file"  />
                            </div>

                             <div class="form-group">
                              
                               <div class="form-group">
                                <label class="small mb-1" for="decription">Description</label>
                                 <textarea class="form-control py-4" name="Description" id="decription" rows="3"></textarea>
                               </div>
                            </div>
                      
                           
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input type="submit" class="btn btn-primary" value="Submit" />
                            </div>
                        </form>
                    </div>
                <div class="card-footer text-center">
                    <div class="small">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

  
    
            <script>

    $(document).ready(function () {
        $('.tox-notification--warn').hide();
       

    });





      tinymce.init({
        selector: '#decription'
      });
    </script>

@endsection