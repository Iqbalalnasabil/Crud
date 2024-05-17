@extends('template.template')

@section('content')
      <div class="container" style="width: 75%; border: 1px solid; border-radius: 5px; margin-top: 100px">
        <form class="mb-4 p-2" action="/update/{{$product->id}}" method="POST">
            @csrf
            @method('PATCH')
            <h1 class="text-center mb-4 mt-4">Edit Product</h1>
            <div class="form-group mb-2">
                <label for="">Product Name</label>
                <input value="{{$product->products_name}}" type="text" class="form-control" name='products_name'>
            </div>

            <div class="form-group mb-2">
                <label for="">Price</label>
                <input value="{{$product->price}}" type="number" class="form-control" name='price'>
            </div>

            <div class="form-group mb-2">
                <label for="">Stock</label>
                <input value="{{$product->stock}}" type="number" class="form-control" name='stock'>
            </div>

            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection