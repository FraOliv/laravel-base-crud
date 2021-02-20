@extends('layouts.app')
@section('title')
Home
    
@endsection
@section('main_content')
<h1>Create</h1>
<form action="{{route('posts.store')}}" method="post">
   

    <div class="form-group">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Title</small>
</div>


  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
    <small class="text-muted">Inserisci il body del post</small>
  </div>

<button type="submit" class="btn btn-primary">
    Submit
</button>

</form>
@endsection