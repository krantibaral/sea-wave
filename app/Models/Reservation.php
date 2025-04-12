<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Reservation extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'date', 'time', 'person', 'status', 'accept_terms'];
}

