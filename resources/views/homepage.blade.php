@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Book Name</th>
              <th>Category</th>
              <th>Author Name</th>
              <th>Price</th>
            </tr>
            @foreach($books as $book)
              <tr class = "text-center">
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td><a href="{{route('books.AddtoCart',['id'=>$book->id])}}" class = "btn btn-info">Add to Cart</a></td>
                <td><a href="{{route('books.buying',['id'=>$book->id])}}" class = "btn btn-danger">Buy</a></td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
            </div>
        </div>
    </div>
</div>
@endsection
