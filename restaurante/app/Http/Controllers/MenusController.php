<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    function show(Menus $menus){
        $menus=Menus::latest()->paginate(15);
        //return $messages;
        return view('menu.show', ['menu' => $menu]);
    }
}
