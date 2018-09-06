<?php

namespace App\Http\Controllers;

use App\Author;
use App\Paper;
use App\Poster;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function authorPage(){
      $papersId = Paper::pluck('author_id');
      $authors = Author::whereIn('id',$papersId)->get();
      return view('authors', compact('authors'));
    }


    public function participantPage(){
        $papersId = Paper::pluck('author_id');
        $authors = Author::whereNotIn('id',$papersId)->get();
        return view('participants', compact('authors'));
    }

    public function posterPage(){
        $posterId = Poster::pluck('author_id');
        $authors = Author::whereIn('id',$posterId)->get();
        return view('posters', compact('authors'));
    }

    public function authorRegistrationDetails($id){
        $author = Author::with('paper')->findOrFail($id);
        return view('registrationDetails', compact('author'));
    }

}
