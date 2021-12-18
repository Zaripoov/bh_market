<?php

namespace App\Http\Controllers;

use App\Mail\SendNewBook;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function myBook(){
        $books = Book::where('user_id', Auth::id())->get();

        return view('book.myBook',[
            'books' => $books,
        ]);
    }

    public function create(){
        return view('book.create');
    }

    public function store(Request $request){

        $book = new Book();
        if($book->saveBook($request)){
            return redirect()->route('my_book')->with('success', 'Книга "'. $book->name . '" успешно добавлено');
        }


    }
}
