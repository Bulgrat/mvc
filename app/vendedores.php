<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendedores extends Model
{
    protected $fillable =[
        'id',
        'nome'
    ];
    protected $table = 'vendedores';

}
