<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    
        return view('index',['products'=>Product::get()]);

    }
    public function create()
    {
        return view('Product/create');
    }
    public function store(Request $request)
    {
        
        //validation part
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);



        //uploading part
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('productimages'),$imageName);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;

        $product->save();
        dd($request->all());


    }
}
