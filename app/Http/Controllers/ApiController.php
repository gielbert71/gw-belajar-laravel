<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function produk(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_code = $request->product_code;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->buatProduk();
        return json_encode($product);
        return response()->json(['Produk berhasil ditambahkan']);
    }
    public function tampilkanProduct()
    {
        $produk = Product::showProducts();
        return $produk;
    }
    public function updateData(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required|',
            'category_id' => 'required|',
            'product_code' => 'required|',
            'description' => 'required|',
            'price' => 'required|',

        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        if ($product->update($request->all())) {
            return response()->json(['message' => 'Data telah diperbarui']);
        } else {
            return response()->json(['message' => 'Gagal memperbarui data'], 500);
        }
    }
}
