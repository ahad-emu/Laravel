@extends("layouts.app")
@section("content")
<div class="container">
  <h1>Todo List</h1>
    <div class="">
      <div class="">
        <ul>
          <?php foreach ($todos as $key): ?>
            <li><a href="/todo/{{$key->id}}">{{$key->name}}</a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  </body>
</html>
@endsection
