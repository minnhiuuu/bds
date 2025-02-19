<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'status',
        'type',
        'address',
        'city',
        'state',
        'country',
        'latitude',
        'longitude',
        'area',
        'bedrooms',
        'bathrooms',
        'parking_spaces',
        'featured',
    ];

    /**
     * Relationship: Property belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope: Filter properties by status.
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    /**
     * Scope: Filter properties by type.
     */
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope: Get featured properties.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
