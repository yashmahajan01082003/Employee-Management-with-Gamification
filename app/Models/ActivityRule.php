<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'activity_id',
        'min_score',
        'max_score',
        'operator',
        'points',
    ];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
