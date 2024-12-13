<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,jpg,png,svg|',
        ]);

        $filePath = $request->file('file')->store('skills', 'public');

        Skill::create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('skill.index')->with('success', 'skill Berhasil Di Tambahkan!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('admin.skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png,svg',
        ]);
    
        $skill = Skill::findOrFail($id);
        $data = $request->only(['name', 'description']);
    
        // Jika ada file baru yang diunggah
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($skill->file && Storage::disk('public')->exists($skill->file)) {
                Storage::disk('public')->delete($skill->file);
            }
    
            // Simpan file baru
            $filePath = $request->file('file')->store('homes', 'public');
            $data['file'] = $filePath;
        }
    
        // Update data
        $skill->update($data);
    
        return redirect()->route('skill.index')->with('success', 'Home updated successfully.');
    }

    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id); // Mencari data berdasarkan ID
        $skill->delete(); // Menghapus data
        return redirect()->route('skill.index')->with('success', 'Data deleted successfully');
    }
}
