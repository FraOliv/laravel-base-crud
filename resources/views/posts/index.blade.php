@extends('layouts.app')

@section('title')
Post Home
    
@endsection
@section('main_content')

<a href="{{route('posts.create')}}" class="btn btn-dark">
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
            <a href="{{route('posts.show', ['post'=>$value->id])}}">View</a>
            <a href="{{route('posts.edit', ['post'=>$value->id])}}">Edit</a>
            <form action="{{route('posts.destroy', ['post'=>$value->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> Delete</button>
            </form>
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