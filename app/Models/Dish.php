<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'meal_id'];

    public function meal()
    {
        return $this->belongsTo(Meal::class, 'meal_id', 'id');
    }
}
