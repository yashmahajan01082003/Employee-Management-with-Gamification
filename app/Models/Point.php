<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = [
        'pointable_id',
        'pointable_type',
        'transaction_type',
        'points',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
