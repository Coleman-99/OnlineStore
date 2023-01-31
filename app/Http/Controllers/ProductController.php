<?php

namespace App\Http\Controllers;

use id;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Database\Factories\ProductFactory;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::latest()->get();


        return view('pages.home', ['data' => $data]);
    }
    public function result()
    {
        $data = Product::filter(request(['search']))->latest()->get();

        return view('pages.products', ['data' => $data]);
    }
    public function read(Product $product)
    {
        return view('pages.product', ['single' => $product]);
    }
    public function uploadPage()
    {
        return view('pages.create');
    }
    public function create(Request $request)
    {
        /*  $table->id();
            $table->integer('user_id');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('name');
            $table->string('type');
            $table->integer('likes');
            $table->float('price');
            $table->longText('description');
            $table->timestamps(); */
        $product = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        if ($request->hasFile('image1') && $request->hasFile('image2') && $request->hasFile('image3')) {
            $product['image1'] = $request->file('image1')->store('product_images', 'public');
            $product['image2'] = $request->file('image2')->store('product_images', 'public');
            $product['image3'] = $request->file('image3')->store('product_images', 'public');
        }
        $product = auth()->id('user_id');
        Product::create($product);
        return redirect('/')->with('message', 'Product details uploaded succesfully');
    }
}
