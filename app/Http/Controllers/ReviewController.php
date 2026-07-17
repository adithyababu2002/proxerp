<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /* =========================
       INDEX – List Reviews
    ========================== */
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('reviews.index', compact('reviews'));
    }

    /* =========================
       CREATE – Show Form
    ========================== */
    public function create()
    {
        return view('reviews.create');
    }

    /* =========================
       STORE – Save Review
    ========================== */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'message'    => 'required|string',
            'rating'     => 'required|integer|min:1|max:5',
            'image'      => 'nullable|image',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('reviews', 'public');
        }

        Review::create([
            'name'       => $request->name,
            'profession' => $request->profession,
            'message'    => $request->message,
            'rating'     => $request->rating,
            'image'      => $path,
            'status' => $request->has('status'),

        ]);

        return redirect()
            ->route('reviews.index')
            ->with('success', 'Review added successfully!');
    }

    /* =========================
       SHOW – View Review
    ========================== */
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    /* =========================
       EDIT – Edit Form
    ========================== */
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    /* =========================
       UPDATE – Update Review
    ========================== */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'message'    => 'required|string',
            'rating'     => 'required|integer|min:1|max:5',
            'image'      => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }

            $review->image = $request->file('image')->store('reviews', 'public');
        }

        $review->update([
            'name'       => $request->name,
            'profession' => $request->profession,
            'message'    => $request->message,
            'rating'     => $request->rating,
            'status' => $request->has('status'),

        ]);

        return redirect()
            ->route('reviews.index')
            ->with('success', 'Review updated successfully!');
    }

    /* =========================
       DESTROY – Delete Review
    ========================== */
    public function destroy(Review $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()
            ->route('reviews.index')
            ->with('success', 'Review deleted successfully!');
    }
}
