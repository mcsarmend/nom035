<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quest_1;
use Illuminate\Support\Facades\Auth;
class acontecimientostraumaticosController extends Controller
{
    public function index(){
            return view('quest.acontecimientos_traumaticos');
    }
    
    

    public function ac_quest(Request $request){
        
        $name = Auth::user()->name;
        $id = Auth::user()->id;
        return $request;


        return User::create([
            'user_id' => $id,
            'sec1quest1' =>$request['sec1quest1'],
            'sec1quest2' =>$request['sec1quest2'],
            'sec1quest3' =>$request['sec1quest3'],
            'sec1quest4' =>$request['sec1quest4'],
            'sec1quest5' =>$request['sec1quest5'],
            'sec1quest6' =>$request['sec1quest6'],
            'sec2quest1' =>$request['sec2quest1'],
            'sec2quest2' =>$request['sec2quest2'],
            'sec3quest1' =>$request['sec3quest1'],
            'sec3quest2' =>$request['sec3quest2'],
            'sec3quest3' =>$request['sec3quest3'],
            'sec3quest4' =>$request['sec3quest4'],
            'sec3quest5' =>$request['sec3quest5'],
            'sec3quest6' =>$request['sec3quest6'],
            'sec3quest7' =>$request['sec3quest7'],
            'sec4quest1' =>$request['sec4quest1'],
            'sec4quest2' =>$request['sec4quest2'],
            'sec4quest3' =>$request['sec4quest3'],
            'sec4quest4' =>$request['sec4quest4'],
            'sec4quest5' =>$request['sec4quest5'],
        ]);
       

      }
}
