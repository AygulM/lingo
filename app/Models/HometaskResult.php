<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HometaskResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'solution',
        'path_solution',
    ];

    
    public function hometask(){
        return $this->belongsTo(Hometask::class);
    }

    
}
