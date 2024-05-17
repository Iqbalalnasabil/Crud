@extends('template.template')

@section('content')
    <div class="container mt-5 border" style="width: 60%" >
        <h1 class="text-center mb-4 mt-4">Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
              <tr >
                <td>{{$loop->iteration}}</td>
                <td>{{$item->products_name}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock}}</td>
                <td>
                  <a href="/edit/{{$item->id}}" class="btn btn-outline-success mb-2">Edit</a>
                  <form action="/destroy/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                  </form>
                </td>
              </tr> 
              @endforeach
            </tbody>
        </table>
    </div> 
@endsection