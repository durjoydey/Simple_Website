<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function workbased(){
        return view('pages.workbased');
    }
    public function ourwork(){
        return view('pages.ourwork');
    }
 
}
