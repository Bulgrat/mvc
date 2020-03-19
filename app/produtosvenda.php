<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtosvenda extends Model
{
     protected $fillable =[
        'id',
        'venda_id',
        'produto_id',
        'quantidade',
        'valor'
    ];
    protected $table = 'produtosvenda';
}
