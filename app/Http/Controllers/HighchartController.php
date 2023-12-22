<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HighchartController extends Controller
{
    public function handleChart()
    {
        $totalProducts = DB::table('products')->count();
        $totalCategories = DB::table('products_categories')->count();
        $totalPrice = DB::table('products')->sum('price');
        $totalStock = DB::table('products')->sum('stock');
        $namecategory = DB::table('products_categories')->pluck('category_name');
        $kategori = ProductsCategory::all();
        $produk = Product::all();
        // Fetch all categories from the product_categories table
        $pcategories = ProductsCategory::all();

        // Initialize an array to store category prices
        $categoryPrices = [];
        
        // Loop through each category
        foreach ($pcategories as $category) {
            $categoryId = $category->id;
            $totalharga = Product::where('category_id', $categoryId)->sum('price');
            $categoryPrices["Category $categoryId"] = $totalharga;
        }
        
        //loop category stocks
        $categoryStock = [];
        foreach ($pcategories as $category) {
            $categoryId = $category->id;
            $totalstok = Product::where('category_id', $categoryId)->sum('stock');
            $categoryStock["Category $categoryId"] = $totalstok;
        }

        $categories = ProductsCategory::withCount('products')->get(['id', 'category_name', 'products_count']);





        // dd($categoryPrices);
        return view('chart', compact('categoryPrices', 'categories', 'totalCategories', 'totalProducts', 'totalPrice', 'totalStock', 'namecategory', 'kategori', 'produk', 'categoryStock'));
    }
}
