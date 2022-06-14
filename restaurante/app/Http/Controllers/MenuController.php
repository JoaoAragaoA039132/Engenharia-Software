<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    function show(Menu $menu){
        $menu=Menu::latest()->paginate(15);
        //return $messages;
        return view('menu-client.show', ['menu' => $menu]);
    }
}
