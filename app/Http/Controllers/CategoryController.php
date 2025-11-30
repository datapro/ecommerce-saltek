<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::with('products')->paginate(20);
          return view('admin.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  public function storecategory(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('categories', 'public');
    }

    Category::create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $imagePath,
        'status' => $request->status ?? 1,
    ]);

    return back()->with('success', 'Category Created Successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editcategory(string $id)
    {
        //
        $category = Category::findOrFail($id);
        return view('admin.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatecategory(Request $request, string $id)
    {
        //
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:4048'
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $category->image = $imagePath;
        }
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status ?? $category->status;
        $category->image = $category->image;
        $category->save();
        return redirect()->route('category')->with('success', 'Category Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletecategory(string $id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Category Deleted Successfully!');
    }
}
