<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTruckMenu extends BaseModel
{
    use HasFactory;

    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo(FoodTruckCategory::class, 'food_truck_category_id');
    }
}
