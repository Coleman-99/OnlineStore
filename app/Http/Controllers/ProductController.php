<?php

namespace App\Http\Controllers;

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
}
