<?php

namespace App\Http\Controllers\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

/**
 * Controller for books.
 */
class BooksController extends Controller
{
    public function get()
    {
        $books = Book::all();

        $data = [
            'books' => $books
        ];

        return view('books', $data);
    }
}
