<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $fillable =[
        'id',
        'name'
    ];
    protected $table = 'categorias';

    public function jogos(){

        return $this->hasMany(jogos::class, 'id');
    }
    // App\categorias::create(['nome' => 'plataforma']);
}
