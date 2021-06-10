<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // CARA 1
        // $product = new Product;
        // $product->products = $request->products;
        // $product->price = $request->price;
        // $product->description = $request->description;
        // $product->est_time = $request->est_time;
        // $product->vendor = $request->vendor;

        // $product->save();

        // CARA 2
        // CARA INI BOLEH DIGUNAKAN APABILA SUDAH MEMBUAT LIST
        // FILLABLE PADA MODEL
        // Product::create([
        //     'products' => $request->products,
        //     'price' => $request->price,
        //     'description' => $request->description,
        //     'est_time' => $request->est_time,
        //     'vendor' => $request->vendor,
        // ]);

        // CARA 3
        // CARA INI BOLEH DIGUNAKAN APABILA SUDAH MEMBUAT LIST
        // FILLABLE PADA MODEL
        Product::create($request->all());

        return redirect('products')->with('status', 'Add Successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
