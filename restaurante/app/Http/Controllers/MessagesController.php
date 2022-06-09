<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function createc(){
        return view('messages-client.create');
    }

    function storec(StoreMessagesRequest $request){
        //return $request;
        $messages=Messages::create($request->validated());
        $messages->create($request->validated());
        return redirect()->route('message.show')->with('Mensagem envida','Aguarde pela confirmação');
    }

    function editf(Reservations $reservations){
        return view('messages-func.edit',['messages'=>$messages]);
    }

    function updatef(){

    }
}
