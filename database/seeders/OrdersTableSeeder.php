<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'client@example.com')->first();

        Order::create([
            'user_id' => $user->id,
            'status' => 'pending',
            'total_price' => 150.00,
            'shipping_address' => '456 Client Avenue',
            'payment_method' => 'cash_on_delivery',
            'tracking_number' => null,
        ]);
    }
}
