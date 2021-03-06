<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   /* use HasFactory;
    protected $fillable = [
        'categoria',
        'preco',
        'nome',
        'descricao',
    ];*/

    use HasFactory;
    protected $fillable = [
        'nome',
        'categoria',
        'preco',
        'descricao',
    ];

    public function nomeCategoria(){
        return $this->belongsTo(Categories::class, 'categoria', 'id');
    }

}
