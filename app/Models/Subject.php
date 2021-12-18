<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    // public function studentsubject(){
    //     return $this->hasMany(StudentSubject::class);
    // }
    public function student(){
        return $this->hasMany(student::class);
    }
}
