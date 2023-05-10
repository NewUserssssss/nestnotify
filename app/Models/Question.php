<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;



     protected $fillable = [
        'question_id',
        'questions',
        'user_id',
        'role',
    ];

   public function getOprtions()
  {
    
    
    return $this->hasMany('App\Models\Answer','question_id','question_id');


  } 


}
