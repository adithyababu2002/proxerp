<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /* =========================
       INDEX – List Team Members
    ========================== */
    public function index()
    {
      $teams = Team::orderBy('name')->get();
        return view('teams.index', compact('teams'));
    }

    /* =========================
       CREATE – Show Form
    ========================== */
    public function create()
    {
        return view('teams.create');
    }

    /* =========================
       STORE – Save Team Member
    ========================== */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'description'=> 'required|string',
            'link'       => 'nullable|url',
            'image1'     => 'nullable|image',
            'image2'     => 'nullable|image',
        ]);

        $image1 = $request->hasFile('image1') 
                  ? $request->file('image1')->store('teams', 'public') 
                  : null;

        $image2 = $request->hasFile('image2') 
                  ? $request->file('image2')->store('teams', 'public') 
                  : null;

        Team::create([
            'name'       => $request->name,
            'profession' => $request->profession,
            'description'=> $request->description,
            'link'       => $request->link,
            'image1'     => $image1,
            'image2'     => $image2,
            'status'     => $request->has('status'),
        ]);

        return redirect()
            ->route('teams.index')
            ->with('success', 'Team member added successfully!');
    }

    /* =========================
       SHOW – View Team Member
    ========================== */
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    /* =========================
       EDIT – Edit Form
    ========================== */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    /* =========================
       UPDATE – Update Team Member
    ========================== */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'description'=> 'required|string',
            'link'       => 'nullable|url',
            'image1'     => 'nullable|image',
            'image2'     => 'nullable|image',
        ]);

        // Image1 upload
        if ($request->hasFile('image1')) {
            if ($team->image1 && Storage::disk('public')->exists($team->image1)) {
                Storage::disk('public')->delete($team->image1);
            }
            $team->image1 = $request->file('image1')->store('teams', 'public');
        }

        // Image2 upload
        if ($request->hasFile('image2')) {
            if ($team->image2 && Storage::disk('public')->exists($team->image2)) {
                Storage::disk('public')->delete($team->image2);
            }
            $team->image2 = $request->file('image2')->store('teams', 'public');
        }

        $team->update([
            'name'       => $request->name,
            'profession' => $request->profession,
            'description'=> $request->description,
            'link'       => $request->link,
            'image1'     => $team->image1,
            'image2'     => $team->image2,
            'status'     => $request->has('status'),
        ]);

        return redirect()
            ->route('teams.index')
            ->with('success', 'Team member updated successfully!');
    }

    /* =========================
       DESTROY – Delete Team Member
    ========================== */
    public function destroy(Team $team)
    {
        if ($team->image1 && Storage::disk('public')->exists($team->image1)) {
            Storage::disk('public')->delete($team->image1);
        }

        if ($team->image2 && Storage::disk('public')->exists($team->image2)) {
            Storage::disk('public')->delete($team->image2);
        }

        $team->delete();

        return redirect()
            ->route('teams.index')
            ->with('success', 'Team member deleted successfully!');
    }
}
