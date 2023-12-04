<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    public $product_name;
    public $category_id;
    public $product_code;
    public $description;
    public $price;
    protected $guarded = [];
    // protected $fillable = ['product_name','category_id','product_code','description','price'];

    public static function showProducts()
    {
        $results = DB::select('select * from products');
        return $results;
    }

    public function buatProduk()
    {
        DB::insert('insert into products (product_name,category_id,product_code,description,price) values (:product_name, :category_id, :product_code, :description, :price)',[
            'product_name' => $this->product_name,
            'category_id'=>$this->category_id,
            'product_code'=>$this->product_code,
            'description'=>$this->description,
            'price'=>$this->price
        ]);
    }
}
