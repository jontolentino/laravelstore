<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function main(){
        return view('main');
    }

    public function index(){
        $products = DB::table('products')->get();
        $products = $products->reverse();
        return view('all_product', ['products' => $products]);
    }

    public function create(){
        return view('create_product');
    }

    public function save(Request $request){
        
        $product = new Product;

        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;  
        $product->status = "Enable";

        $product->save();
        return redirect('/product');
        // echo 'product was saved.';

    }

    public function show_edit($id){
        $product = Product::find($id);
        return view('show_product', ['product' => $product]);
    }

    public function save_edit(Request $request, $id){
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;  
        $product->status = $request->status;

        $product->save();
        // echo 'product was edited';
        // $flash = $request->session()->flash('status', 'Product was edited');
        // Session::flash('message', 'Product was edited!'); 
        return redirect('/product');
    }
}
