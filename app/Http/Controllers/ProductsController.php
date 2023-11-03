<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::all();
        return view("products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    return dd($request->all());
    $request->validate([
        'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ],[
        'image.mimes'=>'the image should be of the following format jpeg,png,jpg,gif',
        'image.max'=>'the max size for img if 2048'
    ]);
    $img=$request->file('img');
    $imgName = time() . '.' . $img->getClientOriginalExtension();
    $img->storeAs('public', $imgName);

    $product=new Product;
    $product->productName=$request->input('ProductName');
    $product->productPrice=$request->input('ProductPrice');
    $product->productDescription=$request->input('ProductDescription');
    $product->productImg=$imgName;

    $product->save();

    return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'image.mimes'=>'the image should be of the following format jpeg,png,jpg,gif',
            'image.max'=>'the max size for img if 2048'
        ]);
        $img=$request->file('img');
        $imgName = time() . '.' . $img->getClientOriginalExtension();
        if($request->input('img')){
           
            $img->storeAs('public', $imgName);
        }

        $product = Product::find($id);
        $product->productName = $request->input('productName');
        $product->productPrice = $request->input('productPrice');
        $product->productDescription = $request->input('productDescription');
        $product->productImg = $request->$imgName;
        $product->save();

        return view('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the user
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
