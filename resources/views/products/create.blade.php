@extends('layouts/app')

@section('content')
<div class="container">
    <h1>Create Product</h1>
    <form class="form" action="/products" method="POST">
        @csrf
        <label class="form-group" for="name">Name</label>
        <input class="form-control" type="text" name="name"><br>
        <label class="form" for="description">Description</label>
        <input class="form-control" type="text" name="description"><br>
        <label class="form" for="price">Price</label>
        <input class="form-control" type="number" name="price"><br>
        <label class="form" for="image_url">Image URL</label>
        <input class="form-control" type="text" name="image_url"><br>
        <input class="btn btn-lg" type="submit" value="save">
    </form>
</div>
    
@endsection