<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    function show(Menus $menus){
        $menus=Menus::latest()->paginate(15);
        //return $messages;
        //return view('menu.show', ['menu' => $menu]);
        return true;
    }
}
