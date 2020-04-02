<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weekendHandler extends Controller
{
    public function munnar(){
        return view('weekend.munnar');
    }
    public function alappuzha(){
        return view('weekend.alappuzha');
    }
    public function ooty(){
        return view('weekend.ooty');
    }
    public function hampi(){
        return view('weekend.hampi');
    }
    public function mysore(){
        return view('weekend.mysore');
    }
    public function madurai(){
        return view('weekend.madurai');
    }
    public function rameshwaram(){
        return view('weekend.rameshwaram');
    }
    public function tirupati(){
        return view('weekend.tirupati');
    }
}