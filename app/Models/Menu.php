<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the category that owns the menu.
     */
    public function category()
    {
        return $this->belongsTo(MenuCategory::class, 'category_id');
    }

    public function getImageUrlAttribute()
    {
        return $this->getImage();
    }

    public function getThumbUrlAttribute()
    {
        return $this->getThumbnail();
    }

}



