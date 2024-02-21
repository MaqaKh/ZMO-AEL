<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class AdminCategoryController extends Controller
{

    public function index()
    {
         $categories = Category::paginate(10);
        return view('admin.ecommerce-categories', ['categories' => $categories]);
    }

    public function create()
    {

        return view('admin.ecommerce-add-category');
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

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.ecommerce-edit-category', ['category' => $category]);
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
