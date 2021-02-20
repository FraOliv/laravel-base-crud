@extends('layouts.app')

@section('title')
<h1>Post Home</h1>
    
@endsection
@section('main_content')

<a href="" class="btn btn-dark">
    Create a new Post
</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($posts as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->body}}</td>
        <td>
            <a href="">View</a>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    @empty
    <tr>
        <td>no posts in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection