<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("products.index",compact("products"));
    }
    public function create(){
        $product_types = ProductType::all();
        return view("products.create",compact("product_types"));
    }
    public function store(Request $request){
        $product=$request->all();
        Product::create($product);
        return redirect("products");
    }
    public function edit($id){
        $product = Product::findOrFail($id);
        return view("products.update",compact("product"));
    }
    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect("products");
    }
}
