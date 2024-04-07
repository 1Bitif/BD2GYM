<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(4);
        return view("dashboard.product", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.Products.AddProducts");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = $request->validate([
            "name" => "required | min:5 ",
            "prix" => "required",
            "stock" => "required",
            "image" => "required | image | mimes:png,jpg,svg,jpeg,webp ",
        ]);
        $form["image"] = $request->file("image")->store("images","public");
        Products::create($form);
        return redirect()->route("dashboard.products");
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        return view("dashboard.Products.edit", compact("products"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        $form = $request->validate([
            "name" => "required | min:5 ",
            "prix" => "required",
            "stock" => "required",
            "image" => "required | image | mimes:png,jpg,svg,jpeg,webp ",
        ]);
        $form['image'] = $request->file("image")->store("images", "public") ; 
        $products->update($form);
        return redirect()->route("dashboard.products");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route("dashboard.products");
    }
}
