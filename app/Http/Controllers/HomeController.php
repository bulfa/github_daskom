<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function artikel(){
        return view("Artikel");
    }
    public function kontak(){
        return view("Kontak");
    }
}