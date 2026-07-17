<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $solutions = Solution::latest()->get();

    return view('solutions.index', compact('solutions'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   
{
    $request->validate([
        'icon' => 'required|string',
        'heading' => 'required|string|max:255',
        'paragraph' => 'required|string',
        'link' => 'required|string',
    ]);

    Solution::create($request->all());

    return redirect()->route('solutions.index')
                     ->with('success', 'Solution added successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Solution $solution)
{
    return view('solutions.show', compact('solution'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solution $solution)
{
    return view('solutions.edit', compact('solution'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solution $solution)
    {
         $request->validate([
        'icon' => 'required|string',
        'heading' => 'required|string|max:255',
        'paragraph' => 'required|string',
        'link' => 'required|string',
    ]);

    $solution->update($request->all());

    return redirect()->route('solutions.index')
                     ->with('success', 'Solution updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Solution $solution)
{
    $solution->delete();

    return redirect()->route('solutions.index')
                     ->with('success', 'Solution deleted successfully');
}
}
