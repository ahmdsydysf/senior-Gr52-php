<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data = DB::table('profiles')->get();

        // $data = Profile::all();

        $data = Profile::when($request->search, function ($query, $value) use ($request) {

            if($request->col_select == '*') {
                $query->where('first_name', 'like', "%$value%")
                ->orWhere('last_name', 'like', "%$value%")
                ->orWhere('age', 'like', "%$value%")
                ->orWhere('address', 'like', "%$value%")
                ->orWhere('mobile', 'like', "%$value%");
            } elseif($request->col_select == 'first_name') {
                $query->where('first_name', 'like', "%$value%");
            } elseif($request->col_select == 'age') {
                $query->where('age', 'like', "%$value%");
            }

        })->get();

        return view('profile.all', compact('data'));
        // ->fullUrlWithoutQuery(['search' ,'col_select' ])
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        $request->validated();

        // DB::table('profiles')->insert([
        //     'user_id' => $request->,
        //     'last_name' => $profile[2],
        //     'age' =>  $profile[6],
        //     'mobile' => $profile[3],
        //     'gender' => $profile[4],
        //     'address' => $profile[5],
        //     'first_name' => $profile[1],
        //     'created_at' => Carbon::now();
        //     'created_at' => Carbon::now();
        // ]);

        // Profile::create([
        //     'last_name' => $request->last_name,
        //     'age' =>  $request->age,
        //     'mobile' => $request->mobile,
        //     'gender' => $request->gender,
        //     'address' => $request->address,
        //     'first_name' => $request->first_name,
        // ]);
        // dd($request->all());
        Profile::create($request->all());// input name the same as DB Column


        // $profile = new Profile();
        // $profile->first_name = $request->first_name;
        // $profile->last_name = $request->last_name;
        // $profile->mobile = $request->mobile;
        // $profile->gender = $request->gender;
        // $profile->age = $request->age;
        // $profile->address = $request->address;

        // $profile->save();
        // $profile = new Profile($request->all());
        // $profile->save();
        toast('Your Post as been submited!', 'success')->timerProgressBar();

        //return redirect()->route('profile.index')->with('status','add profile success');
        return to_route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        dd($profile);
        // $profile = Profile::find($id)
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $request->validated();
        // $profile->first_name = $request->first_name;
        // $profile->last_name = $request->last_name;
        // $profile->mobile = $request->mobile;
        // $profile->gender = $request->gender;
        // $profile->age = $request->age;
        // $profile->address = $request->address;

        // $profile->save();
        $profile->update($request->all());
        toast('Your Post as been submited!', 'success')->timerProgressBar();

        //return redirect()->route('profile.index')->with('status','add profile success');
        return to_route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        toast('Your Post as been dellllllleted!', 'danger')->timerProgressBar();

        //return redirect()->route('profile.index')->with('status','add profile success');
        return to_route('profile.index');
    }
}
