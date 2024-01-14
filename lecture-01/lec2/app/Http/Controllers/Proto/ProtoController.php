<?php

namespace App\Http\Controllers\Proto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProtoController extends Controller
{
    public function index()
    {
        return view('proto.main');
    }
    public function contact()
    {
        return view('proto.contact');
    }
}
