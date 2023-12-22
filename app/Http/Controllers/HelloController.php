<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $categories = ProductsCategory::pluck('category_name', 'id');
        return view('pages.create', compact('categories'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|min:1|max:255',
            'category_id' => 'required',
            'product_code' => 'required|string|min:4|max:5',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('image');
        $file_name = time() . "_" . $file->getClientOriginalName();
        $destination = 'cover';
        $file->move($destination, $file_name);

        $product = new Products;
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->product_code = $request->input('product_code');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->image = $file_name;
        $product->save();

        return redirect()->back()->with('success');
    }

    public function edit($id)
    {
        $products = Products::find($id);
        $categories = ProductsCategory::pluck('category_name', 'id');
        return view('pages.edit', compact('products', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|min:1|max:255',
            'category_id' => 'required',
            'product_code' => 'required|string|min:4|max:5',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // $request->validate([
        // ]);
        $products = Products::find($id);
        $category = ProductsCategory::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time() . "_" . $file->getClientOriginalName();
            $destination = 'cover';
            $file->move($destination, $file_name);
    
            // Remove old image if needed
            // Storage::delete($destination . '/' . $category->image);
    
            $category->image = $file_name;
        }

        $products->update([
            'product_name' => $request->input('product_name'),
            'category_id' => $request->input('category_id'),
            'product_code' => $request->input('product_code'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'image' => $request->input('image')
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
