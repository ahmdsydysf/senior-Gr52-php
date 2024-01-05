<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function allProducts()
    {
        return view('all.allProducts');
    }
    public function allNews()
    {
        return view('all.allNews');
    }
}
