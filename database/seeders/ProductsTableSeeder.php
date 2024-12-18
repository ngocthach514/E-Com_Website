<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $electronicsCategory = Category::where('slug', 'electronics')->first();
        $clothingCategory = Category::where('slug', 'clothing')->first();

        Product::create([
            'category_id' => $electronicsCategory->id,
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 599.99,
            'stock' => 100,
            'sku' => 'SP123',
            'image_url' => 'https://example.com/smartphone.jpg',
            'is_featured' => true,
            'discount' => 10.00,
        ]);

        Product::create([
            'category_id' => $clothingCategory->id,
            'name' => 'T-Shirt',
            'description' => 'Comfortable cotton t-shirt',
            'price' => 19.99,
            'stock' => 200,
            'sku' => 'TS456',
            'image_url' => 'https://example.com/tshirt.jpg',
            'is_featured' => false,
            'discount' => 5.00,
        ]);
    }
}
