<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringMenuCategory extends BaseModel
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
