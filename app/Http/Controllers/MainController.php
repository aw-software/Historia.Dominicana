<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return response()->json(['message'=>'Método Index de Historia Dominicana :D']);
    }
}
