@extends('site.app')

@section('title', 'Products')

@section('content')
<h1 class="text-center my-3">Create Product</h1>
<div class="container">
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="price">
        </div>
        <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
