@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12  p-5">
            <div class="card">
               

                <div class="card-body">
                        @include('layouts.message')
                        <table class="table table-striped table-inverse ">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Date of Event</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($events as $event)
                                     <tr>
                                        <td >{{$i++}}</td>
                                        <td style="width:20%">{{$event->Title}}</td>
                                        <td style="width:20%">
                                            @php
                                                $description = strip_tags($event->Description)
                                            @endphp
                                            
                                                {{  substr($description, 0, 50) }}
                                        
                                        </td>
                                        <td> <img src="{{asset($event->Image)}}" class="rounded-circle" style="height:60px;width:60px;" alt=""> </td>
                                        <td>{{$event->EventDate}}</td>
                                        <td>
                                            <a class="btn btn-primary" href = "{{ url('edit/event/'.$event->id)}}"> <i class="fa fa-edit" > </i> </a>
                                            <a class="btn btn-danger" href = "{{ url('delete/event/'.$event->id )}}"> <i class="fa fa-trash" > </i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                   
                                    
                                </tbody>
                        </table>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
