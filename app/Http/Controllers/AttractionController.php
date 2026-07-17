<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use Illuminate\Support\Facades\Storage;

class AttractionController extends Controller
{
    /* =========================
       INDEX – List Attractions
    ========================== */
    public function index()
    {
        $attractions = Attraction::latest()->get();
        return view('attractions.index', compact('attractions'));
    }

    /* =========================
       CREATE – Show Form
    ========================== */
    public function create()
    {
        return view('attractions.create');
    }

    /* =========================
       STORE – Save Attraction
    ========================== */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('attractions', 'public');
        }

        Attraction::create([
            'name'   => $request->name,
            'image'  => $path,
            'status' => $request->has('status'),
        ]);

        return redirect()
            ->route('attractions.index')
            ->with('success', 'Attraction added successfully!');
    }

    /* =========================
       SHOW – View Attraction
    ========================== */
    public function show(Attraction $attraction)
    {
        return view('attractions.show', compact('attraction'));
    }

    /* =========================
       EDIT – Edit Form
    ========================== */
    public function edit(Attraction $attraction)
    {
        return view('attractions.edit', compact('attraction'));
    }

    /* =========================
       UPDATE – Update Attraction
    ========================== */
    public function update(Request $request, Attraction $attraction)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($attraction->image && Storage::disk('public')->exists($attraction->image)) {
                Storage::disk('public')->delete($attraction->image);
            }

            $attraction->image = $request->file('image')->store('attractions', 'public');
        }

        $attraction->update([
            'name'   => $request->name,
            'status' => $request->has('status'),
        ]);

        return redirect()
            ->route('attractions.index')
            ->with('success', 'Attraction updated successfully!');
    }

    /* =========================
       DESTROY – Delete Attraction
    ========================== */
    public function destroy(Attraction $attraction)
    {
        if ($attraction->image && Storage::disk('public')->exists($attraction->image)) {
            Storage::disk('public')->delete($attraction->image);
        }

        $attraction->delete();

        return redirect()
            ->route('attractions.index')
            ->with('success', 'Attraction deleted successfully!');
    }
}
