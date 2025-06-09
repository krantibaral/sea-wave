<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringMenu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo(CateringMenuCategory::class, 'catering_menu_category_id');
    }

}
