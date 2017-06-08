@extends('layouts.master')

@section('content')

  <form action="/"  method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="text">title</label>
    <input name="title" type="text" class="form-control" id="text" placeholder="Enter title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
