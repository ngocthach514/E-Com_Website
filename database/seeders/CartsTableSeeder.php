<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'client@example.com')->first();
        $product = Product::first();

        Cart::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => 3,
        ]);
    }
}
