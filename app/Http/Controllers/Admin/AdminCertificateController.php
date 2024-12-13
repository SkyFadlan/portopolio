<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,jpg,png|',
        ]);

        $filePath = $request->file('file')->store('certificates', 'public');

        Certificate::create([
            'name' => $request->name,
            'issued_by' => $request->issued_by,
            'issued_at' => $request->issued_at,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('certificate.index')->with('success', 'Certificate Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show',
        compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png',
        ]);

        $certificate = Certificate::findOrFail($id);
        $data = $request->only(['name', 'issued_by', 'issued_at', 'description']);

        if ($request->hasFile('file')) {
            // Delete the old file if it exists
            if ($certificate->file && Storage::disk('public')->exists($certificate->file)) {
                Storage::disk('public')->delete($certificate->file);
            }

            $filePath = $request->file('file')->store('certificates', 'public');
            $data['file'] = $filePath;
        }

        $certificate->update($data);

        return redirect()->route('certificate.index')->with('success', 'Certificate updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificate = Certificate::findOrFail($id); // Mencari data berdasarkan ID
        $certificate->delete(); // Menghapus data
        return redirect()->route('certificate.index')->with('success', 'Data deleted successfully');
    }
}