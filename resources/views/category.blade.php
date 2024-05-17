@extends('template.template')

@section('content')
    <div class="container mt-5 border" style="width: 50%" >
        <h1 class="text-center mb-4 mt-4">Category List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($categories as $item)
              <tr >
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                  <form action="/category-delete/{{$item->id}}" method="POST">
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