<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable =[
        'id',
        'nome',
        'email',
        'senha'
    ];
    protected $table = 'usuarios';

    public function jogos(){

        return $this->hasMany(jogos::class, 'id');
    }

}
