<?php

namespace App\Http\Controllers;

use App\Models\refresh;
use Illuminate\Http\Request;

class RefreshController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function frm_sub(Request $request)
   {
    $data = array(
        'name' => $request->name, 
        'email'  => $request->email,
       

       );
         refresh::insert($data);
         return ['msg'=>'success'];
   }

   public function index()
   {
    return view('form');
   }

}
