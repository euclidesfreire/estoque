<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

    	$this->call('ProdutoTableSeeder');     
    }
}

class ProdutoTableSeeder extends Seeder
{
	public function run()
	{
		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Geladeria',59,'Side by Side com gelo na porta',2)
			);

		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Fogão',95,'Painel automático e forno elétrico',5)
			);

		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Microondas', 15,'Manda SMS quando termina de esquentar',10)
			);
	}
}
