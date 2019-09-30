@extends("layouts.app")
@section("content")
<div class="container">
  <h1>About Item</h1>
    <div class="card-header">
      about
    </div>
    <div class="card-body">
      <div class="">
        {{$todos-> id}}
      </div>
      <div class="">
        {{$todos-> name}}
      </div>
  </div>
  <div class="card-footer">
   <a href="{{$todos->id}}/edit"><button type="button" name="button" class="btn btn-primary">Edit</button></a>
   <a href="{{$todos->id}}/delete"><button type="button" name="button" class="btn btn-danger">Delete</button></a>
  </div>
</div>
@endsection
