<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Vendas;
use estoque\Compras;
use Request;

//Código tá feio
//Eu sei que tá
//Mas é só teste LOUCOOOOO
class StockController extends Controller
{
    public function dashboard(){

		//$produtos = DB::select('select * from produtos');
		$produtos = Produto::all();
		$vendas = Vendas::all();
		$compras = Compras::all();

		$countProdutos = $countVendas = $countCompras = 0;

		foreach($produtos as $p){
			$countProdutos += $p->quantidade;
		}

		foreach($vendas as $v){
			$countVendas += $v->quantidade;
		}

		foreach($compras as $c){
			$countCompras += $c->quantidade;
		}

		$produtosPorCompras = $countProdutos > 0 ? (100 * $countCompras) / $countProdutos : 0;
		$produtosPorVendas =  $countProdutos > 0 ? (100 * $countVendas) / $countProdutos : 0;

		$dataStoks = array('countProdutos' => $countProdutos, 
						   'countVendas' => $countVendas, 
						   'countCompras' => $countCompras,
						   'produtosPorCompras' => $produtosPorCompras,
						   'produtosPorVendas' => $produtosPorVendas);

		return view('stock.home')->with('dataStoks', $dataStoks);

	}
   
}
