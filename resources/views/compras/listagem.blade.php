@extends('layout.principal')
@section('content')

@if(empty($compras))
    <div>Você Não tem nenhum compras efetuadas.</div>

@else

@if(old('id_produtos'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi Comprado.
</div>
@endif

<h1>Listagem de Compras</h1>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Id</th>
    			<th>Quantidade</th>
    		</tr>
    	</thead>
    	<tbody>
    	@foreach($compras as $c)
    		<tr class="{{ $c->quantidade <= 2 ? 'danger' : ''}}">
    			<td> {{ $c->id_produtos }} </td>   
                <td> {{$c->quantidade}} </td>
    		</tr>
    	@endforeach
    	</tbody>
    </table>

@endif

<h4> <span class="label label-danger pull-right"> Comprar no limite da meta. </span> </h4>

@stop