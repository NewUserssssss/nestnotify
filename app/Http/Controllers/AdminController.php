<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Answer;

class AdminController extends Controller
{
    


    public function post(Request $request)
    {
           
           
           $ques = new Question;
           $ques->questions = $request->question;
           $ques->role = $request->role;
           $ques->save();
           $ques->id;
  
          $gg =$request->answers;

           foreach($gg as $dd)
           {

           $data = new Answer;
           $data->answers  = $dd;
           $data->question_id =$ques->id;
           $data->type = $request->type;
           $data->save();
           }
              
          return response()->json(['message'=> 'data submitted successfully', 'status'=>200]);
        

    }



    public function getquestanswer()
    {

           $data =  Question::with('getOprtions')->orderBy('created_at', 'DESC')->get();

        
           $store = "";
            foreach($data as $d)
            {
              $store.= "<tr class='sortable'><td>".$d->questions."</td><td class='answerloop'>";
               $i = count($d['getOprtions']);
               $j=1;
              foreach($d['getOprtions'] as $a)
              { 
                  
                 if($j<=$i)
                 {
                  if(!empty($a->answers))
                  {

                    $store.=$j.".  ".$a->answers."<br>"; 
                  }

                 }
                 $j++;
                 
              }
              $store.="</td><td>".$d->created_at." </td><td><a href='#' class='status_btn'>Active</a></td><td>";
              $store.="<a href='#' class='status_btn' style='background-color:red !important;'>Edit</a> </td></tr>";
          
            }

           

            
  
        return  $store;

    

    }






}
