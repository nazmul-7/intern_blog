<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all_product () {
        return Product::all();
    }
    public function show_product ($id) {
        return Product::where('id',$id)->first();
    }
    public function storeProduct(Request $request){
        $data = $request->all();
        return Product::create($data);
    }
    public function updateProduct(Request $request){
        $data = $request->all();
        \Log::info($data);
        return Product::where('id',$data['id'])->update($data);
    }
    public function delete_Product(Request $request){
        $data = $request->all();
        return Product::where('id',$data['id'])->delete();
    }
}
