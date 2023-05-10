<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
class Usercontroller extends Controller
{
    
public Function add_user(){
    $user = User::all();
    return view ('Backend.user.add_user',compact('user'));
 }

   /*------- Store User-------*/
   public function create(Request $request)
   {
    
        //    $validator = Validator::make($request->all(), [
        //     'name' =>'required',
        //     'email' =>'required',
        //     'phone' => 'required',
        //     'address'    => 'required',
        //     'age'          => 'required',
        //     'gender'       => 'required',
        //     'role'         => 'required',
        //     'image'          => 'required|image|mimes:jpeg,png,jpg|max:222048',
        //    ]);
        //    if ($validator->fails()) {
        //        return response()->json([
        //            'status' => 400,
        //            'errors' => $validator->messages()
        //        ]);
        //    }
         
            $user = new User();
            $user->name  = $request->name;
            $user->phone  = $request->phone;
            $user->email  = $request->email;
            $user->address = $request->address;
            $user->age  =   $request->age;
            $user->gender = $request->gender;
            $user->role  = $request->role;
            $user->status  = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . $request->name. '.' . $extension;
                $file->move('images/user_image/', $filename);
                $user->image = $filename;
            }
            
            $user->save();
               if ($user) {
                   return response()->json([
                       "status" => 200,
                       "success" => "Save Successfully!"
                   ]);
               }
           }
      
           public function Delete($id)
           {
              $delete= User::find($id);
              $delete->delete();
              if($delete){
               response()->json([
                   "status" =>200,
                   "message" => "Record deleted successfully"
                ]);
              }
              else{
               response()->json([
                   "status" =>200,
                   "message" => "Record deleted successfully"
                ]);
              }
           }
         
      

       }

       

    
  