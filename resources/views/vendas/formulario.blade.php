@extends('layout.principal')
@section('content')

<h1>Nova Venda</h1>

<form action="/vendas/adicionar" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <dir class="form-group">
        <label>Escolha o Produto</label>
        <select name="id_produtos" class="form-control">
        @foreach($produtos as $p)
          <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach
        </select>
    </dir>
    <dir class="form-group">
        <label>Quantidade</label>
        <input type="number" name="quantidade" class="form-control">
    </dir>
    <button type="submit" class="btn btn-primary btn-block">
        Efetuar Venda
    </button>
</form>

<h4> <span class="label label-danger pull-right"><span> </h4>

@stop