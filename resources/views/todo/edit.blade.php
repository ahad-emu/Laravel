@extends("layouts.app")
@section("content")
<div class="container">
  <h2>Edit Form</h2>
  <form class="form-inline" action="update" method="post">
    @csrf
    <label for="name" class="mb-2 mr-sm-2">Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Enter name" name="name" value ="{{$todo -> name}}">
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
</div>
@endsection
