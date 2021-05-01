@extends('layouts/app')
@section('content')
<div class="container">
    <h1>List Products</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td><img src="{{$product->image_url}}" alt="" height="80px"></td>
                <td>
                    <a href="/products/{{$product->id}}/edit">Edit</a>
                    <form action="/products/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    
        <a href="/products/create">Create</a>
    </table>
</div>
@endsection