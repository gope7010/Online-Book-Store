<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
    class BookController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //Show all employees from the database and return to view
            $books = Book::all();
            return view('home',['books'=>$books]);
        }
       
        public function AddtoCart($id)
        {
            //Find the employee
          // $book = Book::find($id);
             $book = Book::all();
           // print_r($book);
          // $book = Book::all();
            return view('book.cart',['book'=>$book] );
            
        }
      
        public function buy($id)
        {
            
        }

         public function remove($id)
        {
            //Retrieve the employee
            $book = Book::find($id);
            //delete
            $book->delete();
            return redirect()->route('books.AddtoCart');
        }
    }