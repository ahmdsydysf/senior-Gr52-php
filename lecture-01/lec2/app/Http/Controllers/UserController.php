<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //'select * from users'

        // $data = DB::table('users')->where('id', '1')->select('name', 'email as MY_Email', 'id', 'password')->get();// collection
        //$data = DB::table('users')->find(1);
        //$data = DB::table('users')->orderBy('id')->where('name', 'admin')->first('email');
        // $data = DB::table('users')->where('id', '>', '1')->value('email');
        // $data = DB::table('users')->select('name', 'email');
        // $d1 = $data->get();
        // $d2 = $data->first();
        // // $d3 = $data->where('id', '>', '2')->get();
        // $data = DB::table('users')
        // ->select('*', DB::raw('count(*) as user_count'))->groupBy('name')->get();

        // $data = DB::table('employees')
        // // ->where('salary', '>', 15000)->get();
        // ->whereRaw('salary > IF (job_id = "AD_VP", ?, 30000)', [15000])->get();
        // ->where(DB::row('salary > IF (job_id = "AD_VP", ?, 30000)', [15000]))->get();
        // $count = DB::table('users')->count();
        // foreach($data as $k => $user) {
        //     dump($user);
        // }
        DB::table('users')->insertOrIgnore([
            'email' => 'kayla@example.com',
            'name' => 'mahmoud',
            'password' => 'mahmoud'
        ]);

        $data = DB::table('users')->get()->dd();
        return view('users.allUsers', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
