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


        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ru' => 'required|string',
            'is_active' => 'required|in:0,1', // Ensure is_active is either 0 or 1
        ]);
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
        $category->name_en = $request->name_en;
        $category->name_ru = $request->name_ru;
        $category->description_en = $request->description_en;
        $category->description_ru = $request->description_ru;
        $category->is_active=$request->is_active;
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


    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'name_en' => 'required|string|max:255',
        //     'description_en' => 'required|string',
        //     'description_ru' => 'required|string',
        //     'is_active' => 'required|in:0,1', // Ensure is_active is either 0 or 1
        // ]);

        $category = Category::findOrFail($id);

        // Update the category properties with the new values
        $category->name_en = $request->name_en;
        $category->name_ru = $request->name_ru;
        $category->description_en = $request->description_en;
        $category->description_ru = $request->description_ru;
        $category->is_active = $request->is_active;

        // Save the updated category
        $category->save();

        // Redirect back to the category index page with a success message
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }


    public function destroy($id)
    {
        //
    }
}
