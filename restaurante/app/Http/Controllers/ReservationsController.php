<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{
    function showc(){
        $reservations=Reservations::latest()->paginate(15);
        return view('reservations-client.show', ['reservations'=>$reservations]);
    }
    function showf(){
        $reservations=Reservations::latest()->paginate(15);
        return view('reservations-func.show', ['reservations'=>$reservations]);
    }

    function createc(){
        return view('reservations-client.create');
    }

    function storec(StoreReservationRequest $request){
       // return $request;
        $reservations=Reservations::create($request->validated());
       // $reservations->create($request->validated());
        return redirect()->route('reservations-client')->with('Reserva criada','Aguarde pela confirmação');
    }

    function editf(Reservations $reservations){
        return view('reservations-func.edit',['reservations'=>$reservations]);
    }

    function updatef(Request $request, Reservations $reservations){
        //return $request;
        DB::table('reservations')
    ->where('id', $request->get('id'))
    ->update(array(
    'mesa'=>$request->get('mesa'),
    'estado'=>$request->get('estado')
    ));
        //$reservations->update($request->validated());
        return redirect()->route('reservations.show')->with('Reserva criada','Aguarde pela confirmação');
    }
}
