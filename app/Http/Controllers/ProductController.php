<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view ('products.create');
    }

    public function store(Request $request){

        // dd($request->all());
        $imageName = time(). '.' .$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->image = $request->name;
        $product->description = $request->description;

        $product->save();
        return back();

    }
}
