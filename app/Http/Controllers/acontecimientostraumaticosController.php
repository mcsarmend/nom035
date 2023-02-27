<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acontecimientostraumaticosController extends Controller
{
    public function index(){
            return view('quest.acontecimientos_traumaticos');
    }
    
    
    public function quest(){
            


        $birthday = date('Y-m-d', strtotime($data['birthday']));
        $date_admition = date('Y-m-d', strtotime($data['date_admition']));
        return User::create([
            'secc1quest1' => $data['secc1quest1'],
            'lnamep' => $data['lnamep'],
            'lnamem' => $data['lnamem'],
            'email' => $data['email'],
            'type' => "1",
            'gender' => $data['gender'],
            'birthday' => $birthday,
            'civil_status' => $data['civil_status'],
            'social_reason' => $data['social_reason'],
            'client' => $data['client'],
            'area' => $data['area'],
            'position' => $data['position'],
            'position_type' => $data['position_type'],
            'working_day' => $data['working_day'],
            'date_admition' => $date_admition,
            'password' => Hash::make($data['password']),
        ]);
    }
}
