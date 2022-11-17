<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderByDesc('created_at')->paginate(15);

        return view('admin.book.index', compact('books'));
    }
}
