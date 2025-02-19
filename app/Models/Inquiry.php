<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // Các trường có thể được gán đại trà
    protected $fillable = ['property_id', 'user_id', 'message', 'status'];

    /**
     * Thiết lập quan hệ với model Property
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * Thiết lập quan hệ với model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
