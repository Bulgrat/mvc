<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $fillable = ['id', 'nome', 'email', 'telefone'];
    protected $table = 'cliente';

}
