<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
class PagesController extends Controller
{
    //
    public function index(Request $request){
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
  
        return view('index', compact('products','categories','query','trends'));
    }
    
  public function byCategory($id)
    {
        $trends = Product::with('images','category')   // load all related images
                        ->latest()
                        ->take(4)
                        ->get();

        $products = Product::where('category_id', $id)
                           ->with('category')
                           ->paginate(9);
        $categories = Category::all();
        $selectedCategory = Category::findOrFail($id);

        return view('index', compact('products', 'categories', 'selectedCategory','trends'))->with('success','similar products in category');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function singleproduct()
    {
        return view('pages.singleproduct');
    }
    public function listshop(Request $request)
    {
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

        return view('pages.listshop', compact('products','categories','query','trends'));
    }
}
