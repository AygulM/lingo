<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'text',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
