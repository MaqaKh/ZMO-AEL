<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
class AdminProductController extends Controller
{

    public function index()
    {
        $products=Product::with('category')->paginate();
        return view('admin.ecommerce-products',['products'=>$products]);
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.ecommerce-add-product', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description_en' => 'required|string',
        //     'description_ru' => 'required|string',
        //     'price' => 'required|numeric',
        //     'code' => 'required|string|max:50',
        //     'is_active' => 'required|boolean',
        //     'stock_status' => 'required|string|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'category_id' => 'required|exists:main_categories,id',
        //     // Add more validation rules as needed
        // ]);

        // Store image in public directory
        $imageName = $request->image;
        $path = Storage::disk('public')->put('images/' . 'products' . '/' . $imageName, $request->image);
        $url = Storage::disk('public')->url('products/'.$imageName);

        // Create product
        $product = new Product();
        $product->name = $request->name;
        $product->description_en = $request->description_en;
        $product->description_ru = $request->description_ru;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->is_active = $request->is_active;
        $product->stock_status = $request->stock_status;
        $product->image_path = $url;
        $product->category_id = $request->category_id;
        // Add more fields as needed

        $product->save();

          return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
