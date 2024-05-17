@extends('template.template')

@section('content')
    <div class="container" style="width: 75%; border: 1px solid; border-radius: 5px; margin-top: 100px">
        <form class="mb-4 p-2" action="/category-store" method="POST">
            @csrf
            <h1 class="text-center mb-4 mt-4">Create Category</h1>
            <div class="form-group mb-2">
                <label for="">Category Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name='name'>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection