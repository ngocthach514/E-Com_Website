<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;

class OrderDetailsTableSeeder extends Seeder
{
    public function run()
    {
        $order = Order::first();
        $product = Product::first();

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 2,
            'price' => $product->price,
            'discount' => 5.00,
        ]);
    }
}
