<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public function phone(){
       return $this->belongsTo(Phone::class,'phone_id');
   }
   public function grade(){
    return $this->belongsTo(Grade::class);
}
public function subjects(){
   return $this->belongsToMany(Subject::class);
}
// public function studentsubject(){
//     return $this->hasMany(StudentSubject::class);
// }
}
