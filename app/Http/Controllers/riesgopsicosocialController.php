<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riesgopsicosocialController extends Controller
{
    public function index(){
    //     $clientes = User::where('profile','=','2')->select('id','name')->get();
        //return view('quest.riesgo_psicosocial',['clientes'=>$clientes]);
        return view('quest.riesgo_psicosocial');
    }
}
