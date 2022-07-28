<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function financial(){
        return view('financial');
    }
    public function scope(){
        return view('scope');
    }
    public function energy(){
        return view('energy');
    }
    public function marine(){
        return view('marine');
    }
    public function konstruksi(){
        return view('konstruksi');
    }
    public function liability(){
        return view('liability');
    }
    public function property(){
        return view('property');
    }
    public function others(){
        return view('others');
    }
    public function maintenance(){
        return view('maintenance');
    }
}
