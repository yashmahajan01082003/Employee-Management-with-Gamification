<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'points',
        'quantity',
        'img',
    ];

    public function points()
    {
        return $this->morphMany(Point::class, 'pointable');
    }
}
