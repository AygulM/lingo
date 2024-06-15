<?php

namespace App\Models;


use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'city',
        'about',
        'practice',
        'education',
        'photo',
        'vk',
        'telegram',
        'whatsapp'
    ];
    public function lang(){
        return $this->belongsTo(Lang::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
