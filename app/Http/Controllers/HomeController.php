<?php

namespace App\Http\Controllers;

use App\Author;
use App\Paper;
use App\Poster;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papersIds = Paper::pluck('author_id');
        $posterIds = Poster::pluck('author_id');

        $authors = Author::whereIn('id',$papersIds)->count();
        $posters = Author::whereIn('id',$posterIds)->count();
        $participants = Author::whereNotIn('id',$papersIds)->count();
        return view('home', compact('authors','participants', 'posters'));
    }
}
