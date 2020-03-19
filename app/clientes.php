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

    public function clienteProduto(){

        return $this->hasManyThrough(produtosvenda::class,'id');
    }

    public function clienteVendedoros(){

        return $this->hasManyThrough(vendedores::class,'id');
    }
}
