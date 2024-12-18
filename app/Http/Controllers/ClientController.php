<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ClientController extends Controller
{
    public function home()
    {
        $products = Product::where('is_featured', true)->get();
        return view('client.home', compact('products'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('client.product', compact('product'));
    }
}

