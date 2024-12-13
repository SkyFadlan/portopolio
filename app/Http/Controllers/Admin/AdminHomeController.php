<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('admin.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,jpg,png|',
        ]);

        $filePath = $request->file('file')->store('homes', 'public');

        Home::create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('home.index')->with('success', 'home Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('admin.home.show',
        compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home = Home::findOrFail($id);
        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png',
        ]);
    
        $home = Home::findOrFail($id);
        $data = $request->only(['name', 'description']);
    
        // Jika ada file baru yang diunggah
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($home->file && Storage::disk('public')->exists($home->file)) {
                Storage::disk('public')->delete($home->file);
            }
    
            // Simpan file baru
            $filePath = $request->file('file')->store('homes', 'public');
            $data['file'] = $filePath;
        }
    
        // Update data
        $home->update($data);
    
        return redirect()->route('home.index')->with('success', 'Home updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $home = Home::findOrFail($id); // Mencari data berdasarkan ID
        $home->delete(); // Menghapus data
        return redirect()->route('home.index')->with('success', 'Data deleted successfully');
    }
}