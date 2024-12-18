<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponsTableSeeder extends Seeder
{
    public function run()
    {
        Coupon::create([
            'code' => 'DISCOUNT10',
            'discount' => 10.00,
            'min_order_value' => 100.00,
            'usage_limit' => 100,
            'expiry_date' => now()->addMonth(),
        ]);

        Coupon::create([
            'code' => 'DISCOUNT20',
            'discount' => 20.00,
            'min_order_value' => 200.00,
            'usage_limit' => 50,
            'expiry_date' => now()->addMonths(2),
        ]);
    }
}
