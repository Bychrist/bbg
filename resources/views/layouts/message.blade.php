
@if(session()->has('success'))
  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ session()->get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif



@if(session()->has('failure'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failure!</strong> {{session()->get('failure')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@endif