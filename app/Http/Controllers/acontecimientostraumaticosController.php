<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quest_1;
use Illuminate\Support\Facades\Auth;
class acontecimientostraumaticosController extends Controller
{
    public function mostrarFormulario()
    {
        return view('acontecimientos_traumaticos');
    }


    
    public function procesarFormulario(Request $request){
        
        // Validación de datos
        $request->validate([
            'sec1quest1' =>'required|string|max:255',
            'sec1quest2' =>'required|string|max:255',
            'sec1quest3' =>'required|string|max:255',
            'sec1quest4' =>'required|string|max:255',
            'sec1quest5' =>'required|string|max:255',
            'sec1quest6' =>'required|string|max:255',
            'sec2quest1' =>'required|string|max:255',
            'sec2quest2' =>'required|string|max:255',
            'sec3quest1' =>'required|string|max:255',
            'sec3quest2' =>'required|string|max:255',
            'sec3quest3' =>'required|string|max:255',
            'sec3quest4' =>'required|string|max:255',
            'sec3quest5' =>'required|string|max:255',
            'sec3quest6' =>'required|string|max:255',
            'sec3quest7' =>'required|string|max:255',
            'sec4quest1' =>'required|string|max:255',
            'sec4quest2' =>'required|string|max:255',
            'sec4quest3' =>'required|string|max:255',
            'sec4quest4' =>'required|string|max:255',
            'sec4quest5' =>'required|string|max:255',
        ]);
        
        $id = Auth::user()->id;
        $data = new quest_1;

        try {
            $cad = 'call insert_form_1('.$id.',"'.$request["sec1quest1"].'","'.$request["sec1quest2"].'","'.$request["sec1quest3"].'","'.$request["sec1quest4"].'","'.$request["sec1quest5"].'","'.$request["sec1quest6"].'","'.$request["sec2quest1"].'","'.$request["sec2quest2"].'","'.$request["sec3quest1"].'","'.$request["sec3quest2"].'","'.$request["sec3quest3"].'","'.$request["sec3quest4"].'","'.$request["sec3quest5"].'","'.$request["sec3quest6"].'","'.$request["sec3quest7"].'","'.$request["sec4quest1"].'","'.$request["sec4quest2"].'","'.$request["sec4quest3"].'","'.$request["sec4quest4"].'","'.$request["sec4quest5"].'")';
            DB::select($cad);
            $check = 'call check_form1('.$id.')';
            DB::select($check);
            $mensaje='Se guardo el formulario correctamente';
            return response()->json(['success'=>$mensaje]);
        } catch (\Throwable $th) {
            $mensaje='No se pudo guardar el formulario';
            return response()->json(['error'=>$mensaje]);
        } 
    }

}
