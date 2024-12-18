<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'discount',
        'min_order_value',
        'usage_limit',
        'expiry_date',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
