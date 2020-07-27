<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $table = 'vendas';
    public $timestamps = false;

    protected $fillable = array('id_produtos', 'quantidade');
}
