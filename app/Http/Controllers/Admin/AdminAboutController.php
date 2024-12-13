<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   //untuk memvalidasi inputan
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        About::create($request->all());
        return redirect()->route('about.index')->with('success','Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $about->update($request->all());
        return redirect()->route('about.index')->with('success','Data update successfully');
    }

    public function destroy(string $id)
    {
        $about = About::findOrFail($id); // Mencari data berdasarkan ID
        $about->delete(); // Menghapus data
        return redirect()->route('about.index')->with('success', 'Data deleted successfully');
    }
}
