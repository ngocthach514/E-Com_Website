<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersTableSeeder extends Seeder
{
    public function run()
    {
        Banner::create([
            'title' => 'Summer Sale',
            'image_url' => 'https://example.com/summer-sale.jpg',
            'link' => 'https://example.com/summer-sale',
            'is_active' => true,
            'start_date' => now(),
            'end_date' => now()->addMonth(),
        ]);

        Banner::create([
            'title' => 'Winter Sale',
            'image_url' => 'https://example.com/winter-sale.jpg',
            'link' => 'https://example.com/winter-sale',
            'is_active' => false,
            'start_date' => now()->addMonth(),
            'end_date' => now()->addMonths(2),
        ]);
    }
}
