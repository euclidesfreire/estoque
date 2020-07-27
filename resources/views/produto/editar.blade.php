@extends('layout.principal')
@section('content')

<h1>Editar Produto</h1>

<form action="/produtos/update" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <input type="hidden" name="id" value="{{{ $p->id }}}" />
    <dir class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ $p->nome }}">
    </dir>
    <dir class="form-group">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" value="{{ $p->descricao }}">
    </dir>
    <dir class="form-group">
        <label>Valor</label>
        <input type="text" name="valor" class="form-control" value="{{ $p->valor }}">
    </dir>
    <dir class="form-group">
        <label>Quantidade</label>
        <input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade }}">
    </dir>
    <button type="submit" class="btn btn-primary btn-block">
        Editar
    </button>
</form>

<h4> <span class="label label-danger pull-right"><span> </h4>

@stop