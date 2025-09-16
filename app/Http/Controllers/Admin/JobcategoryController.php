<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Jobcategory;

class JobcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories =Jobcategory::latest()->get();
       return view('admin.jobcategory.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('admin.jobcategory.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'type'=>'required|in:part time,full time',
        ]);
        $categories = new Jobcategory();
        $categories ->title= $request->title;
        $categories ->type= $request->type;
        $categories ->save();

        $notification='Job Category added successfully';
        return redirect()->route('admin.jobcategory.index')->with('success',$notification);
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
        $category =Jobcategory::findOrFail($id);
        return view('admin.jobcategory.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'title'=>'required|string|max:255',
            'type'=>'required|in:part time,full time',

        ]);
        $category =Jobcategory::findOrFail($id);
        $category ->title= $request->title;
        $category ->type= $request->type;
        $category ->save();

        $notification='Job Category updated successfully';
        return redirect()->route('admin.jobcategory.index')->with('success',$notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categories =Jobcategory::findOrFail($id);
        $categories ->delete();

        $notification='Job Category deleted successfully';
        return redirect()->route('admin.jobcategory.index')->with('success',$notification);

    }
}
