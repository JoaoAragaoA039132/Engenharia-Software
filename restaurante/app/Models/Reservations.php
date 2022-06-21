<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cliente',
        'horario',
        'mesa',
        'n_pessoas',
        'data_reserva',
        'estado',
    ];

    public function clienteNome(){
        return $this->belongsTo(Client::class,'cliente', 'id');
    }
}
