<?php

namespace App\Http\Controllers;

use App\Author;
use App\Paper;
use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorRegistrationController extends Controller
{
    public function authorRegistration()
    {
        return view('registration.author');
    }

    public function authorRegistrationSubmit(Request $request)
    {
        try{
            $author = $this->authorCreate($request);
            $data = $request->only([
                'paper_id','paper_title','paper_authors'
            ]);
            $data['author_id'] = $author->id;
            Paper::create($data);
            return redirect()->back()->with('success', 'Form Submitted Successfully!');
        }catch(\Exception $ex){
            return redirect()->back()->with('danger', 'Something Went Wrong!');
        }
    }





    public function participantRegistration()
    {
        return view('registration.participant');
    }

    public function participantRegistrationSubmit(Request $request)
    {
        try{
            $author = $this->authorCreate($request);
            return redirect()->back()->with('success', 'Form Submitted Successfully!');
        }catch(\Exception $ex){
            return redirect()->back()->with('danger', 'Something Went Wrong!');
        }
    }






    public function posterRegistration()
    {
        return view('registration.poster');
    }

    public function posterRegistrationSubmit(Request $request)
    {
        try{
            $author = $this->authorCreate($request);
            $data = $request->only([
                'poster_title','poster_authors'
            ]);
            $data['author_id'] = $author->id;
            Poster::create($data);
            return redirect()->back()->with('success', 'Form Submitted Successfully!');
        }catch(\Exception $ex){
            return redirect()->back()->with('danger', 'Something Went Wrong!');
        }
    }






    public function authorCreate($request)
    {
        $data = $request->only([
            'title','name','address','affiliation','type','country',
            'email','contact_number','IEEE_id'
        ]);

        if($request->hasFile('IEEE_card')){
            $data['IEEE_card'] = $this->saveFile($request->file('IEEE_card'), 'IEEE_card');
        }
        if($request->hasFile('student_card')){
            $data['student_card'] = $this->saveFile($request->file('student_card'), 'student_card');
        }
        if($request->hasFile('payment_receipt')){
            $data['payment_receipt'] = $this->saveFile($request->file('payment_receipt'), 'payment_receipt');
        }
        $author = Author::create($data);
        return $author;
    }


    public function saveFile($file, $uploadPath)
    {
        Storage::makeDirectory($uploadPath);
        if (isset($file)) {
            $path = $file->store($uploadPath);
            return $path;
        }
        return null;
    }
}
