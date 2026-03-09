<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'price', 
        'address', 'city', 'state', 'zip', 
        'beds', 'baths', 'sqft', 'type', 
        'status', 'image_main', 'images_gallery', 
        'is_featured', 'category_id', 'agent_id'
    ];

    protected $casts = [
        'images_gallery' => 'array',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
