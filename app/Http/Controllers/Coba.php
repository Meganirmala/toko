<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function index(Request $request){
        $data = array(
            (object)array(
                "name" => "mega",
                "age"  => 21,
                "gender"  => "female"
            ),
            (object)array(
                "name" => "nirmala",
                "age"  => 21,
                "gender"  => "female"
            ),
            (object)array(
                "name" => "tio",
                "age"  => 24,
                "gender"  => "male"
            ),
        );
        return view('coba', array(
            'name' => "",
            'menu' => 1,
            'siswa' => $data
        ));
    }
}
