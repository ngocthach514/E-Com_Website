<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('status', ['pending', 'confirmed', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->decimal('total_price', 10, 2);
            $table->text('shipping_address');
            $table->enum('payment_method', ['credit_card', 'paypal', 'cash_on_delivery'])->default('cash_on_delivery');
            $table->string('tracking_number')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
