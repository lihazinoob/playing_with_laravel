<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('Product/create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        //return view('Product/store');
        //upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('productimages'),$imageName);

        //dd($imageName);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;

        $product->save();
        return back();


    }
}
