<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'question_count',
        'time_limit',
        'end_date',
    ];

    public function lang(){
        return $this->belongsTo(Lang::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
    
    public function student() {
        return $this->belongsTo(Student::class);
    }
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function test_type(){
        return $this->belongsTo(TestType::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
