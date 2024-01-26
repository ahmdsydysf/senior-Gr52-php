<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        dump($request);
        return view('ahmed.allAhmed');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ahmed.addahmed');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // $validated = $request->safe()->except(['myemail']);
        // $validated = $request->safe()->only(['myemail']);
        // $validated = $request->safe()->all();


        // $validator = $request->validated();

        // $validate = $request->validate([], [], []);
        // $facadeValidate = Validator::make($request->all(), [], [] []);

        // $validate = $request->validate([
        //     'username' => 'required|string|min:5',
        //     'myemail' => ['required' , 'email'],
        //     'password' => 'required|min:8'
        // ]);


        return "your data stored successfully";
        // $request->merge(['price' => 1200]);
        // dd($request->all(), $request->has(['username' , 'car']));
        //return response(view('new', compact('request')))->cookie('price', 'mahmoud', 20);
        //  return to_route();
        // return response()->view('view name' , [])
        // return response()->file('test.txt');
        // return response()->download('test.txt');
        // return redirect('test/se')->with('flag', 'success');
        // return redirect()->action([ProductsController::class , 'index'], ['id' => 20 , 'name' => 'omar']);
        // return redirect()->route('ahmed.index', ['id' => 20 , 'name' => 'omar']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('ahmed.editahmed', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Session::put('name', 'ahmed');
        Session::put('names', ['a','b']);
        Session::push('names', 'sayed');
        Session::put('users', null);
        Session::put('count', 0);
        // Session::flush();
        // Session::forget('names');

        return view('sessionTest', compact('request'));
    }
}
