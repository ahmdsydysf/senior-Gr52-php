<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FileManager::paginate();
        // $data = FileManager::all();

        return view('filetest.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filetest.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_path' => 'required|image|max:2048',
            'image_description' => 'required|string',
        ]);

        $myfile = $request->image_path ;
        $image = $myfile->store('/', 'public');// just name

        // $image = $myfile->store('/', 'public_uploads');// just name


        // $image = uniqid() . $myfile->getClientOriginalName();
        //$myfile->getClientOriginalExtension();
        //$myfile->getSize();
        //$myfile->getMimeType();
        // $myfile->move(public_path('uploads/images'), $image);

        // $image = $myfile->storeAs('/' , $image , 'disk_name');// just name
        FileManager::create([
            'image_path' => $image,
            'image_description' => $request->image_description,
        ]);
        // FileManager::create($request->all());

        return redirect()->route('filemanager.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FileManager $fileManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileManager $fileManager)
    {
        // dd($fileManager);
        return view('filetest.edit', compact('fileManager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileManager $fileManager)
    {
        $request->validate([
            'image_path' => 'sometimes|image|max:2048',
            'image_description' => 'required|string',
        ]);

        if($request->file('image_path')) {
            $myfile = $request->image_path ;
            $image = $myfile->store('/', 'public');// just name
            Storage::disk('public')->delete($fileManager->image_path);
            // unlink(public_path() , $fileManager->image_path)
            $fileManager->update(['image_path' => $image]);
        }
        $fileManager->update(['image_description' => $request->image_description]);

        return redirect()->route('filemanager.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileManager $fileManager)
    {
        $fileManager->delete();
        Storage::disk('public')->delete($fileManager->image_path);
        return redirect()->route('filemanager.index');
    }
}
