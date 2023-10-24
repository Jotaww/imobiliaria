@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')
@if(session('msg'))
<p class="msg">{{ session('msg') }}</p>
@endif

<div class="container">
  <form action="" method="get">
    <div class="mb-3">
      <label for="client" class="form-label">Cliente</label>
      <input type="text" class="form-control" id="client" name="client" required value="{{request('client')}}" placeholder="Digite o nome, cpf, email ou id">
    </div>
    @if (isset($client))
    <div class="client mb-3">
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
    @endif
    <div class="mb-3">
      <label for="property" class="form-label">Imóvel</label>
      <input type="text" class="form-control" id="property" name="property" required value="{{request('property')}}" placeholder="Digite o nome da rua, numero da casa ou id">
    </div>
    @if (isset($property))
    <div class="property mb-3">
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
    @endif
    <div class="text-center mb-3">
      <input class="btn btn-success" type="submit" value="Buscar">
    </div>
  </form>
  @if (isset($property) && isset($client))
  <form action="/registrar/venda/{{ $client->id }}/{{ $property->id }}" method="post" id="formConfirm" class="formConfirm text-center">
    @csrf
    @method('post')
    <input type="submit" class="btn btn-primary" form="formConfirm" value="Confirmar venda">
  </form>
  @endif
</div>

@endsection