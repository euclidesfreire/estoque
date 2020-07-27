<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Vendas;
use estoque\Produto;
use Request;

class VendasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth', ['only' => ['lista', 'novo', 'adicionar']]);
    }

    public function lista(){

		//$vendas = DB::select('select * from vendas');
		$vendas = Vendas::all();

		return view('vendas.listagem')->with('vendas', $vendas);

    }
    
    public function novo(){

		$produtos = Produto::all();

		return view('vendas.formulario')->with('produtos', $produtos);
	}

	public function adicionar(){

		$only = Request::only('id_produtos', 'quantidade');

		Vendas::create($only);

		//$produto = new Produto($only);

		//$produto->save();

		//return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

		return redirect()->route('lista')->withInput(Request::only('id_produtos'));


	}

}
