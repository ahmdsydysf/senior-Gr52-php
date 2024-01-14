<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function allUsers($id, Request $request)
    {
        dd($id, $request->name);
    }
    public function index(Request $request)
    {
        $myname = $request->name;
        $myage = $request->age;

        return view('all.allcontroller', compact('myname', 'myage'));
    }
    // public function index($name, $age, Request $request)
    // {
    //     // dd($request->name);
    //     // $name = 'ahmed';
    //     // $age = 20 ;
    //     // echo "my name is $name and my age is $age";
    //     return view('all.allcontroller', compact('name', 'age'));
    // }
    public function allProducts()
    {
        return view('all.allProducts');
    }
    public function allNews()
    {
        return view('all.allNews');
    }
}
