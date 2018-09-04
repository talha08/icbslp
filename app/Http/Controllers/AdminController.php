<?php

namespace App\Http\Controllers;

use App\Author;
use App\Paper;
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


    public function authorRegistrationDetails($id){
        $author = Author::with('paper')->findOrFail($id);
        return view('registrationDetails', compact('author'));
    }

}
