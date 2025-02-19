<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    use HasFactory;
    // Các trường có thể được gán đại trà
    protected $fillable = ['property_id', 'amenity'];

    /**
     * Thiết lập quan hệ với model Property
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
