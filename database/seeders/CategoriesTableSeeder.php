<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic items',
            'slug' => 'electronics',
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Men and Women Clothing',
            'slug' => 'clothing',
        ]);
    }
}
