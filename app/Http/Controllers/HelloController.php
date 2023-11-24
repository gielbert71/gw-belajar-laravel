<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function Helloworld()
    {
        return view('helloworld');
    }

    public function Index()
    {
        return view('index');
    }
    public function products()
    {
        $produk = DB::table('products')->get();
        return view('pages.crud', ['produk' => $produk]);
    }

    public function showCreate()
    {
        return view('pages.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'product_code' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product_name = $request->input('product_name');
        $category_id = $request->input('category_id');
        $product_code = $request->input('product_code');
        $description = $request->input('description');
        $price = $request->input('price');

        $product = new Products;
        $product->product_name = $product_name;
        $product->category_id = $category_id;
        $product->product_code = $product_code;
        $product->description = $description;
        $product->price = $price;
        $product->save();
        return redirect()->back()->with('success');
    }

    public function edit($id)
    {
        $products = Products::find($id);
        return view('pages.edit', ['products' => $products]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'product_code' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $products = Products::find($id);

        $products->update([
            'product_name' => $request->input('product_name'),
            'category_id' => $request->input('category_id'),
            'product_code' => $request->input('product_code'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
        return redirect()->back()->with('success');
    }

    public function delete($id)
    {
        $product = Products::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success');
        } else {
            return redirect()->back()->with('error', 'Product not found');
        }
    }
}
