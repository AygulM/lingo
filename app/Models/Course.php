<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'title',
        'duration',
        'max_student',
        'description',
        'preview',
        'previewImage',
        'price',
        'start_date',
        'end_date',
    ];
    public function lang(){
        return $this->belongsTo(Lang::class);
    }
    
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function course_type(){
        return $this->belongsTo(CourseType::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
