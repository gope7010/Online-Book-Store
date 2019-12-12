 @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="{{route('books.index')}}" method = "post">
            {{ csrf_field() }}

             <table class="table">
            <div class="form-group">
             <tr> <label for="id">Book Id:</label> {{$book->id}} <br></tr>
              <tr> <label for="id">Book Title:</label> {{$book->name}}<br></tr>
              <tr><label for="id">Book Category:</label> {{$book->category}}<br></tr>
              <tr><label for="id">Author Name:</label> {{$book->author}}<br></tr>
              <tr><label for="id">Book Price:</label> {{$book->price}}<br></tr>
              <button type = "submit" class = "btn btn-success">Buy</button>
            </table>>


            </div>
            
           
          </form>
        </div>
      </div>
          
        </div>
      </div>
            </div>
        </div>
    </div>
</div>
@endsection
