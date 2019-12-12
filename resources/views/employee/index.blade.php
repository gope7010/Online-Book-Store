    @extends('layouts.master')
    @section('title','Book Home')
    @section('content')
    <a href="/admin">Back</a>
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Book Name</th>
              <th>Category</th>
              <th>Author NAme</th>
              <th>Book Price</th>
            </tr>
            @foreach($employees as $employee)
              <tr class = "text-center">
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->category }}</td>
                <td>{{ $employee->author }}</td>
                <td>{{ $employee->price }}</td>
                <td><a href="{{route('employees.edit',['id'=>$employee->id])}}" class = "btn btn-info">Edit</a></td>
                <td><a href="{{route('employees.destroy',['id'=>$employee->id])}}" class = "btn btn-danger">Delete</a></td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    @endsection