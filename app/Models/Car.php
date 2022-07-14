<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'model',
        'year',
        'is_automatic',
        'engine',
        'number_of_doors',
        'max_speed',
    ];

    public function scopeSearchByBrand($query, $brand = '')
    {
        if ($brand) {
            $query->where('brand', 'like', "%$brand%");
        }
        return $query;
    }

    public function scopeSearchByModel($query, $model = '')
    {
        if ($model) {
            $query->where('model', 'like', "%$model%");
        }
        return $query;
    }
}
