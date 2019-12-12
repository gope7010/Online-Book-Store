<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BuyController extends Controller
{
   

     public function buying($id)
        {
            //Find the employee
            $book = Book::find($id);
            return view('payment',['book'=> $book]);
        }

    
     public function buy()
        {
            //Return view to create employee
            return redirect()->route('books.index');
        }
}
