<?php

namespace App\Http\Controllers;

use App\Author;
use App\Paper;
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
        $papersId = Paper::pluck('author_id');
        $authors = Author::whereIn('id',$papersId)->count();
        $participants = Author::whereNotIn('id',$papersId)->count();
        return view('home', compact('authors','participants'));
    }
}
