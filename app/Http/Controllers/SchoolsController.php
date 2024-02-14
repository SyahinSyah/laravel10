<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{

    // to save the data request 
   public function store(Request $request){
        $schools = new Schools();
        $schools->name = $request->name ;
        $schools->address1 =  $request->address1 ; 
        $schools->address2= $request->address2;
        $schools->address3 = $request->address3; 
        $schools->email = $request->email;
        if($schools->save()){
            return true;
        }
   }
   //to save the data using create method but need to do fill able

   public function storeV2(Request $request)
   {
    if(Schools::Create($request->all()))
    {
        return true;
    }
   }

   public function index()
   {
     $schools = Schools::all();
     return $schools;
   }

   public function show(Schools $schools)
   {
        return $schools; 
   }



   public function update(Request $request , Schools $schools)
   {
        if($schools->fill($request->all())->save())
        {
            return true;
        }
   }



}
