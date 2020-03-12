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
    protected $tabla = 'vendas';

    public function cliente(){
        return $this->belongsTo(clientes::class,'cliente_id');
    }
}
