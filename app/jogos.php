<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jogos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'desc',
        'usuario_id',
        'categoria_id'
    ];
    protected $table = 'jogos';

    public function usuarios(){

        return $this->belongsTo(usuarios::class, 'usuario_id');
    }
    public function categorias(){

        return $this->hasMany(categorias::class, 'id');
    }

}
