<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    public function create(){
        $teams=Team::all();
        return view('blogs.create',compact('teams'));
    }




    public function store(Request $request){
       $request ->validate([
'title'=>'required|string',
'image'=>'required|image',
'heading'=>'required|string',
'paragraph'=>'required|string',
'author_id' => 'required|exists:teams,id',
]); 
$path = $request->file('image')->store('images', 'public');
// Create blog
    Blog::create([
        'title'     => $request->title,
        'image'     => $path,
        'heading'   => $request->heading,
        'paragraph' => $request->paragraph,
            'author_id' => $request->author_id,

    ]);

    return redirect()
        ->route('blogs.index')
        ->with('success', 'Blog created successfully!');
}
public function index()
{
    $blogs = Blog::latest()->get();
    return view('blogs.index', compact('blogs'));
}
public function destroy($id)
{
    $data = Blog::findOrFail($id);

    // delete image
    if ($data->image && Storage::disk('public')->exists($data->image)) {
        Storage::disk('public')->delete($data->image);
    }

    // delete record
    $data->delete();

    return redirect()->route('blogs.index')
           ->with('success', 'Data deleted successfully');
}
public function edit($id)
{
    $blog  = Blog::findOrFail($id);
    $teams = Team::orderBy('name')->get();

    return view('blogs.edit', compact('blog', 'teams'));
}
public function update(Request $request, Blog $blog)
{
    $request->validate([
        'title'     => 'required|string',
        'heading'   => 'required|string',
        'paragraph' => 'required|string',
        'author_id' => 'required|exists:teams,id',
        'image'     => 'nullable|image',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images', 'public');
        $blog->image = $path;
    }

    $blog->update([
        'title'     => $request->title,
        'heading'   => $request->heading,
        'paragraph' => $request->paragraph,
        'author_id' => $request->author_id,
    ]);

    return redirect()
        ->route('blogs.index')
        ->with('success', 'Blog updated successfully!');
}

public function show(Blog $blog)
{
    return view('blogs.show', compact('blog'));
}


}
