<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('pages.welcome');
    }
    public function about() {
        return view('pages.about');
    }
    public function contact() {
        return view('pages.contact');
    }
}
