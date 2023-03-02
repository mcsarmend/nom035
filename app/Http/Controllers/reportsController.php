<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class reportsController extends Controller
{
    public function report2()
    {
        return view('report2');
        
    }
    
    public function getinfoform2(Request $request)
    {
        $call = 'call get_info_form2("'.$request->gender.'","'.$request->civil_status.'","'.$request->social_reason.'","'.$request->area.'","'.$request->position.'","'.$request->position_type.'","'.$request->working_day.'")';
        return $call;
        $info = DB::select($call);
        return $info;
    }
    public function getinfoform1_sec1(Request $request)
    {
        $call = 'call getinfoform1_sec1("'.$request->gender.'","'.$request->civil_status.'","'.$request->social_reason.'","'.$request->area.'","'.$request->position.'","'.$request->position_type.'","'.$request->working_day.'")';
        return $call;
        $info = DB::select($call);
        return $info;
    }
}
