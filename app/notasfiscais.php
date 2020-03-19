<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notasfiscais extends Model
{
    protected $fillable =[
        'venda_id',
        'valor',
        'imposto'
    ];
    protected $table = 'notasfiscais';

}
