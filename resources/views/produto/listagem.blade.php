@extends('layout.principal')
@section('content')

@if(empty($produtos))
    <div>Você Não tem nenhum produto cadastrado.</div>

@else

@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
</div>
@endif

<h1>Listagem de Produtos</h1>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Nome</th>
    			<th>Valor</th>
    			<th>Quantidade</th>
    		</tr>
    	</thead>
    	<tbody>
    	@foreach($produtos as $p)
    		<tr class="{{ $p->quantidade <= 2 ? 'danger' : ''}}">
    			<td> {{ $p->nome }} </td>  
                <td>R$ {{$p->valor}} </td>  
                <td> {{$p->quantidade}} </td>
    			<td>
    				<a href="/produtos/mostra/{{$p->id}}">
    		          <span class="glyphicon glyphicon-search"></span>
    				</a>
    			</td>
				<td>
    				<a href="/produtos/remove/{{$p->id}}">
    		          <span class="glyphicon glyphicon-trash"></span>
    				</a>
    			</td>
                <td>
                    <a href="/produtos/editar/{{$p->id}}">
                      <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
    		</tr>
    	@endforeach
    	</tbody>
    </table>

@endif

<h4> <span class="label label-danger pull-right"> Dois ou menos itens no estoque </span> </h4>

@stop