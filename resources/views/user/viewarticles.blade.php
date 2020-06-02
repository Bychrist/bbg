@extends('layouts.user')

@section('content')

        <div class="row"  >
             <div class="col-md-10 mx-auto" style="margin-top:50px;padding:50px 50px 50px 50px;background:transparent;" >
                        <div class="text-center white  mb-5 ">Here is the list of all your articles </div>
                  
                    <table class="table table-bordered table-striped table-responsive white">
                        <tr class="white">    
                            <th>Title</th>
                            <th>Publishe</th>
                            <th>Body</th>
                            <th>Feature Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($bbg_news  as $new)
                            <tr>
                                <td>{{$new->title}}</td>
                                <td> 
                                     @if ($new->publish == "on")
                                         <input type="checkbox" title="published" checked readonly>

                                    @else
                                        <input type="checkbox" title="not published"  readonly >
                                     @endif 
                                
                                
                                </td>
                                <td>{{ strip_tags(substr($new->body,0,100)) }} </td>
                                <td> <img src="{{asset($new->featuredImage)}}" style="width:60px;height:60px"  >   </td>
                                <td>
                                    <a class="btn btn-success" href="{{url('update/article/'.$new->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{url('delete/article/'.$new->id)}}">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        <tr>
                             <td colspan="5" > <center>{{$bbg_news->links()}}</center>   </td>
                        </tr>
                    </table>

                    
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