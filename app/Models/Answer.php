<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

   

     protected $fillable = [
        'answer_id',
        'answers',
        'question_id',
        'type',
    ];

 protected $primaryKey = "question_id";



  public function questionnare()
  {
    
    
    return $this->hasMany('App\Models\Question','question_id','question_id');


  } 




}








