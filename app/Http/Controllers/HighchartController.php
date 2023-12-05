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

        $categories = ProductsCategory::withCount('products')->get(['id', 'category_name', 'products_count']);
        
        $categoryData = ProductsCategory::with(['products' => function ($query) {
            $query->select('category_id', DB::raw('sum(price) as total_price, sum(stock) as total_stock'))->groupBy('category_id');
        }])->get(['id', 'category_name']);

        // dd($categoryData);

        return view('chart', compact('categories', 'totalCategories', 'totalProducts', 'totalPrice','totalStock','categoryData'));
    }
}
