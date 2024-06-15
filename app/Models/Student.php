<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'photo',
        'birthday',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function hometasks()
    {
        return $this->hasMany(Hometask::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
