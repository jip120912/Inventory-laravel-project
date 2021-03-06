@extends('layouts.app')
@section('content')
<div class = "container">
<div class = "col-sm-12">
	<a href="{{ URL :: to ('home')}}" class = "btn btn-primary">Home</a>
	<a href="{{ URL :: to ('all-post')}}" class = "btn btn-primary">All Post</a>
	<h1 class = "text-center">  All News </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($news as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->title}}</td>
      <td>{{$row->author}}</td>
      <td><img src = "{{URL :: to ($row->image)}}" style = "height: 80px; width: 80px"/></td>
       <td>
       		<!-- <a href="{{ URL :: to ('edit-post/'.$row -> id)}}" class = "btn btn-primary">Edit</a> -->
       		<a href="{{ URL :: to ('delete-news/'.$row -> id)}}" id = "delete" class = "btn btn-danger">Delete</a>
       		
       		<!-- <a href="{{ URL :: to ('view-post/'.$row -> id)}}" class = "btn btn-success">View</a> -->
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection