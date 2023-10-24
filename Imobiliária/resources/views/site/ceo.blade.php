@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/listaImovel.css')}}">

@section('content')

<div class="container">
  <div class="painel">
    <div class="countCeo">
      <h1>Clientes Registrados</h1>
      <i class="bi bi-person" id="person"></i>
      <span>{{ $clientsCount }}</span>
    </div>
    <div class="countCeo">
      <h1>Possíveis Clientes</h1>
      <i class="bi bi-person" id="personPending"></i>
      <span>{{ $clientsPendingCount }}</span>
    </div>
    <div class="countCeo">
      <h1>Propriedades Registradas</h1>
      <i class="bi bi-house" id="house"></i>
      <span>{{ $propertiesCount }}</span>
    </div>
    <div class="countCeo">
      <h1>Propriedades Vendidas</h1>
      <i class="bi bi-house" id="houseSell"></i>
      <span>{{ $propertiesSoldCount }}</span>
    </div>
    <div class="countCeo">
      <h1>Clientes que efetuaram uma compra</h1>
      <i class="bi bi-house-check" id="houseCheck"></i>
      <span>{{ $clientsBuyCount }}</span>
    </div>
    <div class="countCeo">
      <h1>Total de faturamento</h1>
      <i class="bi bi-cash" id="money"></i>
      <span>R$ {{ $formatTotal }}</span>
    </div>
  </div>
</div>

@endsection