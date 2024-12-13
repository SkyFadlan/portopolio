<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $project = Project::all();
            return view('admin.project.index', compact('project'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //untuk memvalidasi inputan
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'date' => 'required|date',
        ]);

        Project::create($request->all());
        return redirect()->route('project.index')->with('success','Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'date' => 'required|date',
        ]);

        $project->update($request->all());
        return redirect()->route('project.index')->with('success','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id); // Mencari data berdasarkan ID
        $project->delete(); // Menghapus data
        return redirect()->route('project.index')->with('success', 'Data deleted successfully');
    }
}
