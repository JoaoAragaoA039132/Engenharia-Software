<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cliente',
        'mensagem',
        'data_mensagem',
    ];

    public function clienteNome(){
        return $this->belongsTo(Client::class, 'cliente', 'id');
    }

}
