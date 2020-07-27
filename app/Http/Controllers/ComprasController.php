<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Compras;
use Request;

class ComprasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth', ['only' => ['lista', 'novo', 'adicionar']]);
    }

    public function lista(){

		//$compras = DB::select('select * from compras');
		$compras = Compras::all();

		return view('compras.listagem')->with('compras', $compras);

    }
    
    public function novo(){
		
		$produtos = Produto::all();

		return view('compras.formulario')->with('produtos', $produtos);
	}

	public function adicionar(){

		$only = Request::only('id_produtos', 'quantidade');

		Compras::create($only);

		//$produto = new Produto($only);

		//$produto->save();

		//return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

		return redirect()->route('compras.lista')->withInput(Request::only('id_produtos'));


	}
}
