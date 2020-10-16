<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use App\Article;

class PagesController extends Controller
{
    //index page
    public function index()
    {

      $books=Book::orderBy('sort', 'ASC')->get();

      return view ('index', compact('books'));
    }


    //book page
    public function book()
    {

      return view ('book');
    }
}
