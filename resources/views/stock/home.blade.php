@extends('layout.principal')
@section('content')
 <!-- Header -->
 <header class="w3-container" style="padding-top:10px">
    <h3><b><i class="fas fa-stream"></i> Stock Dashboard</b></h3>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fas fa-box w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{ $dataStoks['countProdutos'] }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Produtos</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fas fa-bullhorn w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{ $dataStoks['countVendas'] }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Vendas</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fas fa-cash-register w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{ $dataStoks['countCompras'] }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Compras</h4>
      </div>
    </div>
  </div>
  
  <hr>
  <div class="w3-container">
    <h4>Status Geral</h4>
    <p>Vendas/Produtos</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:{{ $dataStoks['produtosPorVendas'] }}%">{{ $dataStoks['produtosPorVendas'] }}%</div>
    </div>

    <p>Compras/Produtos</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:{{ $dataStoks['produtosPorCompras'] }}%">{{ $dataStoks['produtosPorCompras'] }}%</div>
    </div>
  </div>
  <hr>
@stop