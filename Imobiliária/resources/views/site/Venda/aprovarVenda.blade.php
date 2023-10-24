@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')

<div class="container">
  <div class="client mb-3">
    <div class="mb-3">
      <h1>Cliente</h1>
    </div>
    <div class="mb-3">
      <span><strong>Nome:</strong> {{ $client->name }}</span>
    </div>
    <div class="mb-3">
      <span><strong>Email:</strong> {{ $client->email }}</span>
    </div>
    <div class="mb-3">
      <span><strong>Cpf:</strong> {{ $client->cpf }}</span>
    </div>
    <div class="mb-3">
      <span><strong>Telefone:</strong> {{ $client->phone }}</span>
    </div>
    <div>
      <span><strong>Data de nascimento:</strong> {{ $client->birthDate }}</span>
    </div>
  </div>
  <div class="property mb-3">
    <div class="mb-3">
      <h1>Propriedade</h1>
    </div>
    <div class="mb-3">
      <img src="{{asset('image/imoveis/'.$property->mainPhoto)}}" style="width: 200px; height:100px;" alt="">
    </div>
    <div class="mb-3">
      <span><strong>Rua:</strong> {{ $property->street }}</span>
    </div>
    <div class="mb-3">
      <span><strong>Bairro:</strong> {{ $property->neighborhood }}</span>
    </div>
    <div class="mb-3">
      <span><strong>Cidade:</strong> {{ $property->city }}</span>
    </div>
    <div class="mb-3">
      <span><strong>Nº:</strong> {{ $property->number }}</span>
    </div>
    <div>
      <span><strong>Preço:</strong> {{ $property->price }}</span>
    </div>
  </div>
  <form action="/confirmar/venda/{{ $client->id }}/{{ $property->id }}/{{ $sale->id }}" method="post" id="formConfirm" class="formConfirm text-center">
    @csrf
    @method('post')
    <input type="submit" class="btn btn-primary" form="formConfirm" value="Confirmar venda">
  </form>
</div>

@endsection