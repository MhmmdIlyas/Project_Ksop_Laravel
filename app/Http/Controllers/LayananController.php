<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('app', compact('layanans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.dashboard', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $layanan->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dashboard')->with('Berhasil', 'Manajemen layanan berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $layanan = Layanan::where('slug', $slug)->firstOrFail();
        return response()->json($layanan);
    }
}