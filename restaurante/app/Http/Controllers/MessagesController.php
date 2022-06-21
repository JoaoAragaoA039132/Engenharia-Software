<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;

class MessagesController extends Controller
{
    function createc(){
        return view('messages-client.create');
    }

    function storec(StoreMessageRequest $request){
        $messages=Messages::create($request->validated());
        //return redirect()->route('puser-client')->with('Mensagem envida','Aguarde pela confirmação');
        return view('puser-client.show', ['messages' => $messages]);
    }

    function showf(Messages $messages){
        $messages=Messages::latest()->paginate(15);
        //return $messages;
        return view('messages-func.show', ['messages' => $messages]);
    }
}
