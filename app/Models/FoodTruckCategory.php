<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodTruckCategory extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getImageUrlAttribute()
    {
        return $this->getImage();
    }

    public function getThumbUrlAttribute()
    {
        return $this->getThumbnail();
    }
}
