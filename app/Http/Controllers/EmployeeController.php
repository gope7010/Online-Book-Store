<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
    class EmployeeController extends AdminController
    {

      public function __construct()
    {
        $this->middleware('auth:admin');
    }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //Show all employees from the database and return to view
            $employees = Book::all();
            return view('employee.index',['employees'=>$employees]);
        }
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //Return view to create employee
            return view('employee.create');
        }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //Persist the employee in the database
            //form data is available in the request object
            $employee = new Book();
            //input method is used to get the value of input with its
            //name specified
            $employee->name = $request->input('name');
            $employee->category = $request->input('category');
            $employee->author = $request->input('author');
            $employee->price = $request->input('price');
            $employee->save(); //persist the data
            return redirect()->route('employees.index')->with('info','Book Added Successfully');
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //Find the employee
            $employee = Book::find($id);
            return view('employee.edit',['employee'=> $employee]);
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
            //Retrieve the employee and update
            $employee = Book::find($request->input('id'));
            $employee->name = $request->input('name');
            $employee->category = $request->input('category');
            $employee->author = $request->input('author');
            $employee->price = $request->input('price');
            $employee->save(); //persist the data
            return redirect()->route('employees.index')->with('info','Book Updated Successfully');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //Retrieve the employee
            $employee = Book::find($id);
            //delete
            $employee->delete();
            return redirect()->route('employees.index');
        }
    }