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
        $totalharga1 = Product::where('category_id', 1)->sum('price');
        $totalharga2 = Product::where('category_id', 2)->sum('price');
        $totalharga3 = Product::where('category_id', 3)->sum('price');
        $categoryPrices = [
            'Category 1' => $totalharga1,
            'Category 2' => $totalharga2,
            'Category 3' => $totalharga3,
        ];

        $categories = ProductsCategory::withCount('products')->get(['id', 'category_name', 'products_count']);



        

        // dd($categoryPrices);
        return view('chart', compact('categoryPrices', 'categories', 'totalCategories', 'totalProducts', 'totalPrice', 'totalStock', 'namecategory', 'kategori', 'produk'));
    }

    public function shandleChart()
    {
        $totalProducts = Product::count();
        $totalCategories = ProductsCategory::count();
        $totalPrice = Product::sum('price');
        $totalStock = Product::sum('stock');

        $nameCategories = ProductsCategory::pluck('category_name');

        $allCategory = ProductsCategory::all();
        $allProduct = ProductsCategory::all();

        //cek apakah ada kategori yang tidak memiliki produk, dan hitung jumlah produk per kategori
        foreach ($allCategory as $category) {
            $count = 0;
            foreach ($allProduct as $product) {
                if ($product->category_id == $category->id) {
                    $count++;
                }
            }
            $category->count = $count;
        }

        //cek apakah ada kategori yang tidak memiliki produk, dan hitung total harga produk per kategori
        foreach ($allCategory as $category) {
            $total = 0;
            foreach ($allProduct as $product) {
                if ($product->category_id == $category->id) {
                    $total += $product->price;
                }
            }
            $category->total = $total;
        }

        //cek apakah ada kategori yang tidak memiliki produk, dan hitung total stok produk per kategori
        foreach ($allCategory as $category) {
            $total = 0;
            foreach ($allProduct as $product) {
                if ($product->category_id == $category->id) {
                    $total += $product->stock;
                }
            }
            $category->totalStock = $total;
        }

        //dd($allCategory);

        return view('chart', compact('totalProducts', 'totalCategories', 'totalPrice', 'totalStock', 'allCategory'));
    }
}
