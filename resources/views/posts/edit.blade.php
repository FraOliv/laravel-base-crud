@extends('layouts.app')
@section('title')
Edit
    
@endsection
@section('main_content')

<form action="{{route('posts.update', ['post'=>$post->id])}}" method="post">
   

    <div class="form-group">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}" id="title" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Title</small>
</div>


  <div class="form-group">
    <label for="body">Body</label>
     <input type="text" name="body" value="{{$post->body}}" id="body" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Text</small>
  </div>

<button type="submit" class="btn btn-primary">
    Submit
</button>

</form>
@endsection