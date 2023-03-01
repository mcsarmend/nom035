<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportsController extends Controller
{
    public function report2()
    {
        return view('report2');
        
    }
    
    public function getinfoform2(Request $request)
    {
        return $request;

    }
}
