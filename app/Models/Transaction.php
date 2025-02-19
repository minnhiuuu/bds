<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Các trường có thể được gán đại trà
    protected $fillable = ['property_id', 'buyer_id', 'seller_id', 'amount', 'status'];

    /**
     * Thiết lập quan hệ với model Property
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * Thiết lập quan hệ với model User (Buyer)
     */
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    /**
     * Thiết lập quan hệ với model User (Seller)
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
