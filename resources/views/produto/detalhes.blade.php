@extends('layout.principal')

@section('content')

    	<h1>Listagem de Produtos</h1>

    	<table class="table table-hover">
    		<thead>
    			<tr>
    				<th>Nome</th>
    				<th>Valor</th>
    				<th>Descrição</th>
    				<th>Quantidade</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td> {{ $p->nome }} </td>  
    				<td>R$ {{$p->valor}} </td> 
    				<td> {{$p->descricao}} </td> 
    				<td> {{$p->quantidade}} </td>
    			</tr>
    		</tbody>
    	</table>

@stop
    