<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function createc(){
        return view('messages-client.create');
    }

    function storec(StoreMessagesRequest $request){
       // return $request;
        $messages=Messages::create($request->validated());
       // $messages->create($request->validated());
        return redirect()->route('reservations.show')->with('Reserva criada','Aguarde pela confirmação');
    }

    function editf(Reservations $reservations){
        return view('messages-func.edit',['messages'=>$messages]);
    }

    function updatef(){

    }
}
