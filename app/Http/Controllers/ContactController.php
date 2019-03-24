<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view ('/contact',['name'=>'Boris']);
    }

    public function post() {
        return view ('/contact',['name'=>'KingBoris']);
    }
}
