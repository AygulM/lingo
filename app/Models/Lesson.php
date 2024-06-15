<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme',
        'duration',
        'description',
        'start_date',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function hometasks()
    {
        return $this->hasMany(Hometask::class);
    }
}
