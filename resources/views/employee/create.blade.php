    @extends('layouts.master')
    @section('title','Add a Book')
    @section('content')
      <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
          <form action="{{route('employees.store')}}" method = "post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Book Name:</label>
              <input type="text" name = "name" id = "name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="category">Category:</label>
              <input type="text" name = "category" id = "category" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="author">Author:</label>
              <input type="text" name = "author" id = "author" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="text" name = "price" id = "price" class="form-control" required>
            </div>
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection