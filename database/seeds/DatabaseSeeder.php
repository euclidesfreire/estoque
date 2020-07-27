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
		$this->call('VendasTableSeeder'); 
		$this->call('ComprasTableSeeder');     
    }
}

class ProdutoTableSeeder extends Seeder
{
	public function run()
	{
		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Mi Geladeria Smart',1954,'Side by Side com gelo na porta',22)
			);

		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Fogão Smart Touch',1495,'Painel automático e forno elétrico',150)
			);

		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Microondas Smart Fire', 1556,'Manda SMS quando termina de esquentar',320)
			);
		
		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Xiaomi Redmi Note 8', 1290,'Tem alta tecnologia com ótimo preço',1200)
			);

		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Mi 10', 1800,'Lights. Camera. Action. Leading video in the 5G erar',2150)
			);
		
		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Xiaomi MI Note 8', 1099,'Tem alta tecnologia com ótimo preço',509)
			);
		
		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Mi Smart Band 5', 290,'Go smart, live more.',3009)
			);
		
		DB::insert('insert into produtos
			(nome, valor, descricao, quantidade)
			values (?,?,?,?)',
			array('Mi True Wireless Earphones 2 Basic', 199,'Feel the beat all day',2009)
			);
	}
}

class VendasTableSeeder extends Seeder
{
	public function run()
	{
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(1,5)
			);
		
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(2,5)
			);
		
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(3,5)
			);
			
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(4,150)
			);
			
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(5,800)
			);
		
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(6,35)
			);
		
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(7,1502)
			);
			
		DB::insert('insert into vendas
			(id_produtos, quantidade)
			values (?,?)',
			array(8,970)
			);

	}
}

class ComprasTableSeeder extends Seeder
{
	public function run()
	{
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(1,50)
			);
		
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(2,50)
			);
		
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(3,55)
			);
			
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(4,240)
			);
			
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(5,820)
			);
		
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(6,755)
			);
		
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(7,1027)
			);
			
		DB::insert('insert into compras
			(id_produtos, quantidade)
			values (?,?)',
			array(8,970)
			);

	}
}
