<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create() {

        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    function store(CreateProductRequest $request) {

        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->content = $request->content_product;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
    }
}
