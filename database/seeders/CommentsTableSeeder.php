<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Product;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'client@example.com')->first();
        $product = Product::first();

        Comment::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'content' => 'Great product!',
            'rating' => 5,
        ]);
    }
}
