<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{
    public function index(Request $request){
        $request()->session()->put('Historia.Dominicana', 'Hola');
        return view('index');
    }

    public function login(Request $request){
        return view('modals.login')->render();
    }

    public function insertItemMenu(Request $request){
        $menu = new Menu;

        $menu->name = $request->name;
        $menu->parent = $request->parent;
        $menu->sequence = $request->sequence;

        //Inserting the information on the menu table
        $menu->save();
    }

    public function getAllMenu(Request $request){
        $menu = Menu::all();

        return response()->json($menu);
    }


}
