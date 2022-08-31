<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Nav(){
        return view('include.nav');
    }

    public function Footer(){
        return view('include.footer');
    }

    public function home(){
        return view('home');
    }


}
