<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class googleformcontroller extends Controller
{
    public function registerbygoogle(Request $request){
           $data = $request->all();
        
          $name=$data['0aa5953a'];
          $email=$data['09956a86'];
          $nid=$data['17dc58b2'];
          $phone=$data['3ca9c793'];
          $center=$data['007c6d47'];
             Log::info($data);
             $vaccine_center_id=($center==="Center A")?"1":"2";
            DB::table('users')->insert([
                    'name'=>$name,
                    'phone'=>$phone,
                    'email'=>$email,
                    'nid'=>$nid,
                    'vaccine_center_id'=>$vaccine_center_id
                ]);
              return   response()->json(['status'=>"success"],200);
      
    }
}
