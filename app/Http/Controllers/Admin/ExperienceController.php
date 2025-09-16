<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $experiences=Experience::latest()->get();
       return view('admin.experience.index',compact('experiences'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('admin.experience.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
        ]);
        $experiences= new Experience();
        $experiences->title= $request->title;
        $experiences->save();

        $notification='Experience added successfully';
        return redirect()->route('admin.experience.index')->with('success',$notification);
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
    public function edit($id)
    {
        $experience=Experience::findOrFail($id);
        return view('admin.experience.edit',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'title'=>'required|string|max:255',
        ]);
        $experiences=Experience::findOrFail($id);
        $experiences->title= $request->title;
        $experiences->save();

        $notification='Experience updated successfully';
        return redirect()->route('admin.experience.index')->with('success',$notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experiences=Experience::findOrFail($id);
        $experiences->delete();

        $notification='Experience deleted successfully';
        return redirect()->route('admin.experience.index')->with('success',$notification);

    }
}
