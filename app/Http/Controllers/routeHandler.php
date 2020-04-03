<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// using the subcribers table using a subscriber model
use App\subscriber;
// using the contacts table using a contact model
use App\contact;

class routeHandler extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    // public function login(){
    //     return view('login');
    // }
    // public function signup(){
    //     return view('signup');
    // }
    public function weekend(){
        return view('weekend');
    }
    public function book(){
        return view('book');
    }

    // public function seedata(){
    //     $k = new \App\subscriber;
    //     $k = subscriber::all();
    //     return $k;
    // }

    public function saveMail(){
        $email = request('email');

        $p = new \App\subscriber;
        $p->email = $email;
        $p->save();
        // error_log(request('email'));
        return redirect('/');
    }

    public function saveContact(Request $req){
        $firstname = request('fistname');
        $lastname = request('latname');
        $email = request('email');
        $subject = request('subject');
        $description = request('description');

        $p = new \App\contact;
        $p->firstname = $req->firstname;
        $p->lastname = $req->lastname;
        $p->email = $req->email;
        $p->subject = $req->subject;
        $p->description = $req->description;
        $p->save();
        error_log(request('firstname'));
        error_log(request('lastname'));
        return redirect('/contactus');
    }
}
