@extends('layouts.user')

@section('content')

        <div class="row"  >
             <div class="col-md-8 mx-auto" style="margin-top:50px;padding:50px 50px 50px 50px;background:transparent;" >
                        <div class="text-center white  mb-5 ">Create Your Personal News Article </div>
                    <form method="post" action="{{url('create/news/article')}}" enctype = "multipart/form-data"  >      
                           <div class="row">  
                                @csrf
                                <div class="col">
                                        <div class="form-group">    
                                            <label class="white" for="title">Title</label>
                                            <input  value="{{old('title')}}" type="text" name="title" required class="form-control">
                                            <small class="text-danger"> {{$errors->first('title')}}</small>
                                        
                                        </div>
                                
                                </div>
                                <div class="col">

                                        <div class="form-group">    
                                            <label class="white" for="featuredImage">Feature Image</label>
                                            <input type="file" accept="image/*" name="featuredImage"     class="form-control">
                                            <small class="text-danger"> {{$errors->first('featuredImage')}}</small>
                                        
                                        </div>
                                
                                </div>
                                
                               
                                
                          </div>

                              <div class="form-group">
                                    <label for="body" class="white">Article</label>
                                    <textarea name="body" id="body" style="height:200px;resize:none" class="form-control">
                                    {{ old('body')  }}
                                    </textarea>
                                         <small class="text-danger"> {{$errors->first('body')}}</small>
                              </div>

                              <div class="form-group">
                                <input type="checkbox"  name="publish"> <span class="white" >Publish</span>
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