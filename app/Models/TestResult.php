<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;
    //max_points

    public function tests(){
        return $this->hasMany(Test::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }
    
    public function answers() {
        return $this->hasMany(Answer::class);
    }
    
   
}
