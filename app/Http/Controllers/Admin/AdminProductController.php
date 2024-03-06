<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
class AdminProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('admin.ecommerce-products', ['products' => $products]);
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.ecommerce-add-product', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        $product = new Product();
        $request->validate([
            'name' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ru' => 'required|string',
            'description_ge' => 'required|string',
            'price' => 'numeric',
            'code' => 'string|max:50',
            'is_active' => 'boolean',
            'stock_status' => 'string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:main_categories,id',
            // Add more validation rules as needed
        ]);

        // Store image in public directory

      if ($request->has('image')) {
            //   $image->move(public_path('images'), $imageName)
            // $imageName =  $request->image->getClientOriginalName();
            // $path = Storage::disk('public')->putFile('images/products', $request->image, 'public');
            // //$path = Storage::disk('public')->put('images/' . 'products' . '/' . $imageName, $request->image);
            // $url = Storage::disk('public')->url('products/'.$imageName);


       // $filename = $request->image->getClientOriginalName();
        //return dd($filename);

        $file=$request->file('image');
        $filename = $request->file('image')->getClientOriginalName();

        // Store the image in the public disk
        Storage::disk('public')->putFileAs('images/products', $file,$filename);


        $imageUrl = Storage::disk('public')->url('images/products/' . $filename);
     //   $path =  Storage::disk('public')->storeAs( ' . $filename);
         $product->image_path =$imageUrl;

                //  $fileName = time() . '.' . $request->image->extension();
                //  $url=$request->image->storeAs('public/images', $fileName);
            // $imageName = $request->image;
            // Storage::disk('public')->put('images/products/' . $imageName, $request->image);

            // $url = Storage::disk('public')->url('products/'.$imageName);

            // $targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
            // $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';

            // // Check if the symbolic link already exists
            // if (is_link($linkFolder)) {
            //     // If it exists, delete it
            //     unlink($linkFolder);

            // }

            // // Create the symbolic link
            // symlink($targetFolder, $linkFolder);


            // $image = $request->file('image');
            // $imageName = $image->getClientOriginalName();
            // $image->move(public_path('images/products'), $imageName);
            // $url = asset('images/products/' . $imageName);




            }







            // Upload the image to the public folder

            // Generate the URL for the uploaded image
            //$url = Storage::url($path);

            // You can return the URL or do any further processing as needed


        // }


        // Create product

        $product->name = $request->name;
        $product->description_en = $request->description_en;
        $product->description_ru = $request->description_ru;
        $product->description_ge = $request->description_ge;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->is_active = $request->is_active;
        $product->stock_status = $request->stock_status;

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


    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        return view('admin.ecommerce-edit-product', ['products' => $products, 'categories' => $categories]);
    }


    public function update(Request $request, $id)
    {
       // return dd($request->all());
      // Find the product by id
      $product = Product::findOrFail($id);

      // Retrieve the uploaded file before applying validation rules

    //   $request->validate([
    //     'name' => 'required|string|max:255',
    //     'description_en' => 'required|string',
    //     'description_ru' => 'required|string',
    //     'price' => 'numeric',
    //     'code' => 'string|max:50',
    //     'is_active' => 'boolean',
    //     'stock_status' => 'string|max:255',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
    //     'category_id' => 'required|exists:main_categories,id',
    //     // Add more validation rules as needed
    // ]);
      // Update image if provided
      if ($request->has('image')) {
        // Perform image update
            $file=$request->file('image');
           // return dd ($file);
            $relativePath = str_replace(url('/'), '', $product->image_path);
          //  return dd ($relativePath);

            // Remove the 'storage' part
            $relativePath = str_replace('/storage', '', $relativePath);
            //return dd($relativePath);
            $fullPath= 'public/' . $relativePath;
          // Delete old imag
          if( Storage::exists($fullPath)){

            Storage::delete($fullPath);
          }
          $filename = $request->file('image')->getClientOriginalName();
          $encryptedName = Crypt::encrypt($filename);
          $extension = $request->file('image')->getClientOriginalExtension();

          // Encrypt only the filename
          $encryptedName = Crypt::encrypt(pathinfo($filename, PATHINFO_FILENAME));

          // Combine the encrypted filename with the original extension
          $encryptedFileName = $encryptedName . '.' . $extension;


          //return dd($encryptedFileName);
         // $name= str_replace(' ', '_', $filename);


          // Store the image in the public disk
         Storage::disk('public')->putFileAs('images/products', $file,$encryptedFileName);

          // Get the full URL of the stored image

          if (Storage::disk('public')->exists('images/products/' . $encryptedFileName)) {
          $imageUrl = Storage::disk('public')->url('images/products/' . $encryptedFileName);
        //return dd($imageUrl);
          $product->image_path = $imageUrl;
          }
          else{
            return dd($encryptedFileName);
          }
        // Update other fields

    }

    if ($request->hasFile('pdf')) {
        // Delete old PDF if exists
        // if ($product->pdf_path) {
        //     Storage::delete($product->pdf_path);
        // }

        $relativePath = str_replace(url('/'), '', $product->pdf);

        // Remove the 'storage' part
        $relativePath = str_replace('/storage', '', $relativePath);

        $fullPath= 'public/' . $relativePath;

        if( Storage::exists($fullPath)){

            Storage::delete($fullPath);
          }

        $pdfFile = $request->file('pdf');
        $fileName = $pdfFile->getClientOriginalName();
        //$filePath = 'pdfs/' . $fileName;
        //return dd($filename);

        // Store the PDF in the storage folder
        //$pdfUrl = $pdfFile->storeAs('pdfs', $filename, 'public');

        Storage::disk('public')->putFileAs('pdfs/', $pdfFile,$fileName);

         $pdfUrl = Storage::disk('public')->url('pdfs/' . $fileName);

        // Save the path to the PDF in the product's pdf_path column
        $product->pdf = $pdfUrl;
    }

    $product->name = $request->name;
    $product->description_en = $request->description_en;
    $product->description_ru = $request->description_ru;
    $product->description_ge = $request->description_ge;
    $product->price = $request->price;
    $product->code = $request->code;
    $product->is_active = $request->is_active;
    $product->stock_status = $request->stock_status;
    //return dd($request->category_id);
    $product->category_id = $request->category_id;
    // Add more fields as needed

    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $item = Product::findOrFail($id);

        $item->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}
