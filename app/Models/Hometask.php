<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hometask extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'end_date',
    ];

    
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
    
    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function hometask_results()
    {
        return $this->hasMany(HometaskResult::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
