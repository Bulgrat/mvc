<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'email',
        'telefone'
    ];
    protected $table = 'clientes';

    public function vendas(){
        return $this->hasMany(vendas::class,'cliente_id');
    }
}
