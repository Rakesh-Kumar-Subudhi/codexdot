<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function course(){
        return view('frontend.course_details');
    }
    public function registration(){
        return view('frontend.registration');
    }
}
