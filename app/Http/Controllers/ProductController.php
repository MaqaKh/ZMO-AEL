<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::with('category')
        ->orderBy('created_at', 'desc')
        ->paginate();


        return view('product',['products'=>$products]);
         //return view('product',compact('products'));
        // return view('product',$products);
    }

    public function cooming_soon(){

        return view('coming_soon');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function filter($categoryDescription)
    {
        $category = Category::where('description_en', $categoryDescription)->first();
        //return dd($categoryDescription);
        if ($category) {
            $products = $category->products()->paginate();
            return view('product_filter', compact('products', 'category'));
        } else {
            // Handle case where category with the given description does not exist
            // For example, return an error view or redirect back
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    public function show($id)
    {
        $product = Product::with('category')->find($id);

        if (!$product) {
            return view('error');
        }

        return view('product_detail', compact('product'));
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
