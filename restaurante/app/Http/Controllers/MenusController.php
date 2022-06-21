<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenusController extends Controller
{
    function showf(){
        $Menus=Menu::latest()->paginate(15);
        return view('dish.show', ['Menus'=>$Menus]);
    }
    function createf(){
        return view('dish.create');
    }

    function storef(StoreMenuRequest $request){
       $Menus=Menu::create($request->validated());
        return redirect()->route('dish.show')->with('Concluido com sucesso','Prato criado!');
    }

    function editf(Menu $Menus){
        return view('dish.edit',['Menus'=>$Menus]);
    }

    public function updatef(Request $request, Menu $Menus){
        /**/DB::table('menus')
    ->where('id', $request->get('id'))
    ->update(array(
    'nome'=>$request->get('nome'),
    'categoria'=>$request->get('categoria'),
    'preco'=>$request->get('preco'),
    'descricao'=>$request->get('descricao')
    ));
        return redirect()->route('dish.show')->with('Prato Criado','!');
    }
}
