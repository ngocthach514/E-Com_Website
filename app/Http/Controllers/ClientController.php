<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ClientController extends Controller
{
    public function home()
    {
        $featured_product = Product::get([
                                'id' => 'id',
                                'name' => 'name',
                                'description' => 'description',
                                'price' => 'price',
                                'image_url' => 'image_url',
                                'discount' => 'discount',
                            ]);
        $categories = Category::limit(10)
                                ->get();
        return view('client.home', compact('featured_product', 'categories'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('client.product', compact('product'));
    }
}

