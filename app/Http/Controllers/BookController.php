<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
    class BookController extends Controller
    {

         public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
        {
            //Show all employees from the database and return to view
            $books = Book::all();
            return view('homepage',['books'=>$books]);
        }
       
        public function AddtoCart($id)
        {
            //Find the employee
          // $book = Book::find($id);
            // $book = Book::all();
           // print_r($book);
           $book = Book::all();
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