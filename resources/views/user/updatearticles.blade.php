@extends('layouts.user')

@section('content')

        <div class="row"  >
             <div class="col-md-8 mx-auto" style="margin-top:50px;padding:50px 50px 50px 50px;background:transparent;" >
                        <div class="text-center white  mb-5 ">Update Your Personal News Article </div>
                    <form method="post" action="{{url('update/news/article/'.$new->id)}}" enctype = "multipart/form-data"  >      
                           <div class="row">  
                                @csrf
                                <div class="col">
                                        <div class="form-group"> 
                                         <br>   
                                            <label class="white" for="title">Title</label> 
                                            <input  value="{{$new->title}}" type="text" name="title" required class="form-control">
                                            <small class="text-danger"> {{$errors->first('title')}}</small>
                                        
                                        </div>
                                
                                </div>
                                <div class="col">

                                        <div class="form-group">    
                                            <label class="white" for="featuredImage">Feature Image</label>
                                            <img src="{{asset($new->featuredImage)}}" style="width:60px;height:60px">
                                            <input type="file" accept="image/*" name="featuredImage"     class="form-control">
                                            <small class="text-danger"> {{$errors->first('featuredImage')}}</small>
                                        
                                        </div>
                                
                                </div>
                                
                               
                                
                          </div>

                              <div class="form-group">
                                    <label for="body" class="white">Article</label>
                                    <textarea name="body" id="body" style="height:200px;resize:none" class="form-control">
                                    {{ $new->body }}
                                    </textarea>
                                         <small class="text-danger"> {{$errors->first('body')}}</small>
                              </div>

                              <div class="form-group">
                                 @if ($new->publish == "on")
                                     <input type="checkbox" checked  name="publish"> <span class="white" >Publish</span>
                                 @else
                                     <input type="checkbox"  name="publish"> <span class="white" >Publish</span>
                                 @endif
                              </div>

                              <button type="submit" class="btn btn-primary">  
                                publish
                              </button>
                             
                    </form>
               
                    
            </div>
        </div>

@endsection


@section('script')
    <script>
             tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
    </script>
@endsection