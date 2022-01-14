<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function kategorije(){
        return view('pages.kategorije');
    }
    public function novi_oglas(){
        return view('pages.novi_oglas');
    }
    public function azuriranje_oglasa(){
        return view('pages.azuriranje_oglasa');
    }
    public function onama(){
        return view('pages.onama');
    }
}
