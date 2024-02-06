@extends('layout')
@section('content')
<h1>New Book</h1>
<form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter Title" >
      <div>{{$errors->first('title')}}</div>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}" placeholder="Enter Author">
        <div>{{$errors->first('author')}}</div>
    </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn')}}" placeholder="Enter ISBN">
        <div>{{$errors->first('isbn')}}</div>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}" placeholder="Enter Price">
        <div>{{$errors->first('price')}}</div>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" name="stock" value="{{old('stock')}}" placeholder="Enter Stock" >
        <div>{{$errors->first('text')}}</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
  </form>
@endsection