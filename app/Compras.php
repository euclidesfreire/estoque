<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    public $timestamps = false;

    protected $fillable = array('id_produtos', 'quantidade');
}
