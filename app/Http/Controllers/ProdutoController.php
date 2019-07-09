<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['only' => ['adicionar','remove','novo','editar','update']]);
	}

	public function lista(){

		//$produtos = DB::select('select * from produtos');
		$produtos = Produto::all();

		return view('produto.listagem')->with('produtos', $produtos);

	}

	public function listaJson(){ 

		//$produtos = DB::select('select * from produtos');
		$produtos = Produto::all();
		
	    return $produtos; 
	}

	public function mostra(){

		$id = Request::route('id');

		//$resposta = DB::select('select * from produtos where id = ?',[$id]);
		$resposta = Produto::find($id);

		if(empty($resposta)) {
			return "Esse produto não existe";
		}

		return view('produto.detalhes', ['p' => $resposta]);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adicionar(){

		$only = Request::only('nome', 'valor', 'descricao', 'quantidade');

		Produto::create($only);

		//$produto = new Produto($only);

		//$produto->save();

		//return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

		return redirect()->route('lista')->withInput(Request::only('nome'));


	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@lista');
	}

	public function editar($id){

		//$resposta = DB::select('select * from produtos where id = ?',[$id]);
		$resposta = Produto::find($id);

		if(empty($resposta)) {
			return "Esse produto não existe";
		}

		return view('produto.editar', ['p' => $resposta]);
	}

	public function update(){

		$only = Request::only('id','nome', 'valor', 'descricao', 'quantidade');

		$produto = Produto::find($only['id']);
		
		$produto->nome = $only['nome'];
		$produto->valor = $only['valor'];
		$produto->descricao = $only['descricao'];
		$produto->quantidade = $only['quantidade'];

		$produto->save();

		return redirect()->action('ProdutoController@lista');
	}
}