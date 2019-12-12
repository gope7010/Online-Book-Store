    @extends('layouts.master')
    @section('title','Edit Book')
    @section('content')
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="{{route('employees.update')}}" method = "post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name = "name" id = "name" class="form-control" required value = "{{$employee->name}}">
            </div>
            <div class="form-group">
              <label for="category">category:</label>
              <input type="text" name = "category" id = "category" class="form-control" required value = "{{$employee->category}}">
            </div>
            <div class="form-group">
              <label for="author">author:</label>
              <input type="text" name = "author" id = "author" class="form-control" required value = "{{$employee->author}}">
            </div>
            <div class="form-group">
              <label for="price">price :</label>
              <input type="text" name = "price" id = "price" class="form-control" required value = "{{$employee->price}}">
            </div>
            <input type="hidden" name="id" value = "{{$employee->id}}">
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    @endsection