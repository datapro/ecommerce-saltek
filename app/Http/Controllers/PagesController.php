<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
class PagesController extends Controller
{
    //

   public function index(Request $request)
{
    $cart = session()->get('cart', []);
    // 1. Get category name from input
    $categoryName = $request->input('category');

    // 2. Base query with relations
    $query = Product::with('images', 'category');

    // 3. Filter by Category Name
    if ($categoryName) {
        $query->whereHas('category', function ($q) use ($categoryName) {
            $q->where('name', 'LIKE', "%{$categoryName}%");
        });
    }

    // 4. Filter BETWEEN min and max price
    if ($request->min_price && $request->max_price) {
        $query->whereBetween('price', [$request->min_price, $request->max_price]);
    }

    // 5. Paginate final filtered products
    $products = $query->latest()->paginate(12);

    // 6. Categories list
    $categories = Category::all();

    // 7. Trending products (latest 4)
    $trends = Product::with('images','category')
                        ->latest()
                        ->take(4)
                        ->get();

    return view('index', compact(
        'products',
        'categories',
        'trends',
        'categoryName',
        'cart'
    ));
}

    
  public function byCategory($id)
    {
        // add to cart
        $cart = session()->get('cart', []);

        $trends = Product::with('images','category')   // load all related images
                        ->latest()
                        ->take(4)
                        ->get();

        $products = Product::where('category_id', $id)
                           ->with('category')
                           ->paginate(9);
        $categories = Category::all();
        $selectedCategory = Category::findOrFail($id);

        return view('index', compact('products', 'categories', 'selectedCategory','trends','cart'))->with('success','similar products in category');
    }

    public function about()
    {
        $cart = session()->get('cart', []);
        return view('pages.about',compact('cart'));
    }

    public function singleproduct($id)
    {
        $cart = session()->get('cart', []);
        $product = Product::findOrFail($id);
        return view('pages.singleproduct',compact('product','cart'));
    }
    public function listshop(Request $request)
    {
        $cart = session()->get('cart', []);
             // query with price 
        $query = Product::query();
    // $categories = Product::with('category')->paginate(9);
    $categories = Category::all();
    // $selectedCategory = Category::findOrFail($id);
    $products = Product::with('images','category')   // load all related images
                        ->latest()
                        ->take(12)
                        ->paginate(12);


    $trends = Product::with('images','category')   // load all related images
                        ->latest()
                        ->take(4)
                        ->get();

      // Filter BETWEEN min and max price
    if ($request->min_price && $request->max_price) {
        $query->whereBetween('price', [$request->min_price, $request->max_price]);
    }

        return view('pages.listshop', compact('products','categories','query','trends','cart'));
    }
}
