<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($string)
    {
        // dd($string);
        // $d = ['first' => 20,'second' => 10];
        // return view('news.allNews')->with($d);
        $d = ['first' => 20,'second' => 10];
        $name = 'ahmed';
        $age = 20;


        return view('news.allNews', compact('d', 'name', 'age'));
        // return view('news.allNews', ['age' => 20 , 'd' => $d ,'name' => $name]);
        //return view('news.allNews', get_defined_vars());
    }

    public function create($name)
    {
        dd($name);
        return view('news.addNews');
    }

    public function destroy()
    {
        return view('news.deleteNews');
    }
}
