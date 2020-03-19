<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable =[
        'id',
        'cliente_id',
        'data_da_venda',
        'vendador_id'
    ];
    protected $table = 'vendas';

    public function cliente(){
        return $this->belongsTo(clientes::class,'cliente_id');
    }
    public function notaFiscal(){

        return $this->hasOne(notasfiscais::class,'venda_id');
    }
    public function prudutosVendas(){

        return $this->hasMany(produtosvenda::class,'venda_id');
    }

}

