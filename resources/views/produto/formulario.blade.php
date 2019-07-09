@extends('layout.principal')
@section('content')

<h1>Novo Produto</h1>

<form action="/produto/adicionar" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <dir class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </dir>
    <dir class="form-group">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </dir>
    <dir class="form-group">
        <label>Valor</label>
        <input type="text" name="valor" class="form-control">
    </dir>
    <dir class="form-group">
        <label>Quantidade</label>
        <input type="number" name="quantidade" class="form-control">
    </dir>
    <button type="submit" class="btn btn-primary btn-block">
        Adicionar
    </button>
</form>

<h4> <span class="label label-danger pull-right"><span> </h4>

@stop