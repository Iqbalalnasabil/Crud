@extends('template.template')

@section('content')
<div class="container" style="width: 75%; border: 1px solid; border-radius: 5px; margin-top: 100px">
    <form class="mb-4 p-2" action="/store" method="POST">
        @csrf
        <h1 class="text-center mb-4 mt-4">Create Product</h1>
        <div class="form-group mb-2">
            <label for="">Product Name</label>
            <input type="text" class="form-control @error('products_name') is-invalid @enderror" name='products_name'>
            @error('products_name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        
        <div class="form-group">
            <label for="">Product Category</label>
            <select name="category_id" class="form-control">
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group mb-2">
            <label for="">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name='price'>
            @error('price') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group mb-2">
            <label for="">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" name='stock'>
            @error('stock') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>  
@endsection

