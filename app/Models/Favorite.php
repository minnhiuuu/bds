<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Property;

class Favorite extends Model
{
    use HasFactory;
    // Các trường có thể được gán đại trà
    protected $fillable = ['user_id', 'property_id'];

    /**
     * Thiết lập quan hệ với model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Thiết lập quan hệ với model Property
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
