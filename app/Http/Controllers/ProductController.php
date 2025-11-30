<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        $categories = Category::all();

        return view('admin.products', compact('products', 'categories'));
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
   public function storeproduct(Request $request)
{
    $request->validate([
        'productname' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'category_id' => 'nullable|integer',
        'brand' => 'nullable|string',
        'weight' => 'nullable|string',
        'tax' => 'nullable|string',
        'color' => 'nullable|string',
        'sku' => 'required|string|unique:products,sku',

        // Multiple images
        'images' => 'nullable',
        'images.*' => 'image|mimes:jpg,png,jpeg,webp|max:4096',
    ]);

    // Create slug
    $baseSlug = Str::slug($request->productname);
    $slug = $baseSlug;
    $counter = 1;

    while (Product::where('slug', $slug)->exists()) {
        $slug = $baseSlug . '-' . $counter++;
    }

    // Save product first
    $product = Product::create([
        'productname' => $request->productname,
        'size' => $request->size,
        'description' => $request->description,
        'price' => $request->price,
        'stock' => $request->stock,
        'slug' => $slug,
        'brand' => $request->brand,
        'weight' => $request->weight,
        'tax' => $request->tax,
        'color' => $request->color,
        'sku' => $request->sku,
        'category_id' => $request->category_id,
    ]);

    // Upload multiple images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('products', 'public');

            ProductImage::create([
                'product_id' => $product->id,
                'image' => $path
            ]);
        }
    }

    return back()->with('success', 'Product Created Successfully!');
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
    public function editproduct(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.editproduct', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function updateproduct(Request $request, string $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'productname' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'brand' => 'nullable|string',
        'weight' => 'nullable|string',
        'tax' => 'nullable|string',
        'color' => 'nullable|string',
        'sku' => 'required|string|unique:products,sku,' . $product->id,
        'category_id' => 'nullable|integer',
       // Multiple images
        'images' => 'nullable',
        'images.*' => 'image|mimes:jpg,png,jpeg,webp|max:4096',
    ]);

    // Update Featured Image
      if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('products', 'public');

            ProductImage::updateOrCreate([
                'product_id' => $product->id,
                'image' => $path
            ]);
        }
    }

    // Update product fields
    $product->update([
        'productname' => $request->productname,
        'size' => $request->size,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'price' => $request->price,
        'stock' => $request->stock,
        'brand' => $request->brand,
        'weight' => $request->weight,
        'tax' => $request->tax,
        'color' => $request->color,
        'sku' => $request->sku,

    ]);

    return redirect()->route('products')->with('success', 'Product Updated Successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function deleteproduct(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('success', 'Product Deleted Successfully!');
    }
}
