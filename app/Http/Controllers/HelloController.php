<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function Helloworld() {
        return view('helloworld');
    }

    public function Index() {
        return view('index');
    }
    public function products() {
        $produk = DB::table('products')->get();
        return view('pages.crud',['produk'=>$produk]);
    }

    public function showCreate(){
        return view('pages.create');
    }

    public function create(Request $request) {
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

        DB::table('products')->insert([
            'product_name'=>$product_name,
            'category_id'=>$category_id,
            'product_code'=>$product_code,
            'description'=>$description,
            'price'=>$price,
        ]);
        return redirect()->back()->with('success');

    }

    public function edit($id){
        $products = DB::table('products')->find($id);
        return view('pages.edit', ['products'=>$products]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'product_code' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        DB::table('products')
            ->where('id', $id)
            ->update([
                'product_name'=>$request->input('product_name'),
                'category_id'=>$request->input('category_id'),
                'product_code'=>$request->input('product_code'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
            ]);
            return redirect()->back()->with('success');
        }
        
        public function delete($id) {
            // $products = DB::table('products')->find($id);
            DB::table('products')->where('id',$id)->delete();            
            return redirect()->back()->with('success');

    }

}
