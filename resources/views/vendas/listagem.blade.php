@extends('layout.principal')
@section('content')

@if(empty($vendas))
    <div>Você Não tem nenhum vendas efetuadas.</div>

@else

@if(old('id_produtos'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi Comprado.
</div>
@endif

<h1>Listagem de Vendas</h1>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Id</th>
    			<th>Quantidade</th>
    		</tr>
    	</thead>
    	<tbody>
    	@foreach($vendas as $v)
    		<tr class="{{ $v->quantidade <= 2 ? 'danger' : ''}}">
    			<td> {{ $v->id_produtos }} </td>   
                <td> {{$v->quantidade}} </td>
    		</tr>
    	@endforeach
    	</tbody>
    </table>

@endif

<h4> <span class="label label-danger pull-right"> Vendas abaixo da meta.</span> </h4>

@stop