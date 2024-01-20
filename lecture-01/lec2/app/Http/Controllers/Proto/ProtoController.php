<?php

namespace App\Http\Controllers\Proto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProtoController extends Controller
{
    public function __construct()
    {
        // $this->middleware('locale:ar');
        $this->middleware('locale:ar')->except(['index']);
        // $this->middleware('locale:ar')->only(['contact' , 'index']);
        // $this->middleware('locale:ar')->only('contact');

    }
    public function index()
    {
        $names = ['a' , 'b' , 'c' , 'd'];

        return view('proto.main')->with('data', $names);
    }
    public function contact()
    {
        return view('proto.contact');
    }
}
