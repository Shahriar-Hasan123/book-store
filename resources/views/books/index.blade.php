@extends('layout')
@section('content')

<h1>Bookstore</h1>

<div class="row">
    <div class="col-lg-10">
        <form action="{{route('books.index')}}" method="get">
            @csrf
            <input type="text" id="search" name="search" value="{{request('search')}}" placeholder="Search">
            <input type="submit" value='search'>
        </form>
    </div>
    <div class="col-lg-2">
        <p><a href="{{route('books.create')}}" class="btn btn-primary">New Book</a></p>
    </div>
</div>

<table class="table table-striped table-bordered text-center">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td><a class="btn btn-link" href="{{route('books.show',$book->id)}}">View</a></td>
            <td> <a class="btn btn-link" href="{{route("books.edit",$book->id)}}">Edit</a></td>
            <td> 
                <form action="{{route('books.delete')}}" method="POST" onsubmit="return confirm('Sure?')">
                    @csrf
                   <input type="hidden" name="id" value="{{$book->id}}">
                   <input type="submit" value='Delete' class="btn btn-link">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div class="row">
    {{$books->links()}}
</div>
@endsection