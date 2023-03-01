<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\quest_1;
use DB;
class riesgopsicosocialController extends Controller
{
    public function mostrarFormulario()
    {
        return view('riesgo_psicosocial');
    }

    public function procesarFormulario(Request $request)
    {
        $id = Auth::user()->id;

        try {
            $cad = 'call insert_form_2('.$id.',"'.$request["quest1"].'","'.$request["quest2"].'","'.$request["quest3"].'","'.$request["quest4"].'","'.$request["quest5"].'","'.$request["quest6"].'","'.$request["quest7"].'","'.$request["quest8"].'","'.$request["quest9"].'","'.$request["quest10"].'","'.$request["quest11"].'","'.$request["quest12"].'","'.$request["quest13"].'","'.$request["quest14"].'","'.$request["quest15"].'","'.$request["quest16"].'","'.$request["quest17"].'","'.$request["quest18"].'","'.$request["quest19"].'","'.$request["quest20"].'","'.$request["quest21"].'","'.$request["quest22"].'","'.$request["quest23"].'","'.$request["quest24"].'","'.$request["quest25"].'","'.$request["quest26"].'","'.$request["quest27"].'","'.$request["quest28"].'","'.$request["quest29"].'","'.$request["quest30"].'","'.$request["quest31"].'","'.$request["quest32"].'","'.$request["quest33"].'","'.$request["quest34"].'","'.$request["quest35"].'","'.$request["quest36"].'","'.$request["quest37"].'","'.$request["quest38"].'","'.$request["quest39"].'","'.$request["quest40"].'","'.$request["quest41"].'","'.$request["quest42"].'","'.$request["quest43"].'","'.$request["quest44"].'","'.$request["quest45"].'","'.$request["quest46"].'","'.$request["quest47"].'","'.$request["quest48"].'","'.$request["quest49"].'","'.$request["quest50"].'","'.$request["quest51"].'","'.$request["quest52"].'","'.$request["quest53"].'","'.$request["quest54"].'","'.$request["quest55"].'","'.$request["quest56"].'","'.$request["quest57"].'","'.$request["quest58"].'","'.$request["quest59"].'","'.$request["quest60"].'","'.$request["quest61"].'","'.$request["quest62"].'","'.$request["quest63"].'","'.$request["quest64"].'","'.$request["quest65"].'","'.$request["quest66"].'","'.$request["quest67"].'","'.$request["quest68"].'","'.$request["quest69"].'","'.$request["quest70"].'","'.$request["quest71"].'","'.$request["quest72"].'")';
            DB::select($cad);
            $check = 'call check_form_2('.$id.')';
            DB::select($check);
            $mensaje='Se guardo el formulario correctamente';
            return response()->json(['success'=>$mensaje]);
        } catch (\Throwable $th) {
            $mensaje='No se pudo guardar el formulario';
            return response()->json(['error'=>$mensaje]);
        } 
    }

    public function mostrarConfirmacion()
    {
        return view('confirmacion');
    }
}
