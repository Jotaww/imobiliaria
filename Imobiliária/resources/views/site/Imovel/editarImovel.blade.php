@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')

<div class="container">
  <form action="" method="post" enctype="multipart/form-data" id="form">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="mainPhoto" class="form-label">Foto principal</label>
      <input type="file" class="form-control" id="mainPhoto" name="mainPhoto">
    </div>
    <div class="mb-3">
      <label for="photos" class="form-label">Fotos</label>
      <input type="file" class="form-control" id="photos" name="photos[]" multiple>
      <span id="span-required-file">Selecione 6 Fotos</span>
    </div>
    <div class="mb-3">
      <label for="casa" class="form-label">Tipo do imóvel</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Casa" name="propertyType" id="casa" {{ $property->propertyType == 'Casa' ? 'checked' : '' }}>
        <label class="form-check-label" for="casa">Casa</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Apartamento" name="propertyType" id="apartamento" {{ $property->propertyType == 'Apartamento' ? 'checked' : '' }}>
        <label class="form-check-label" for="apartamento">Apartamento</label>
      </div>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Valor</label>
      <input type="text" class="form-control required" id="price" name="price" value="{{$property->price}}" size="12" onKeyUp="mascaraMoeda(this, event)">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="condominium" class="form-label">Condomínio</label>
      <input type="text" class="form-control required" id="condominium" name="condominium" value="{{$property->condominium}}" size="12" onKeyUp="mascaraMoeda(this, event)">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="iptu" class="form-label">IPTU</label>
      <input type="text" class="form-control required" id="iptu" name="iptu" value="{{$property->iptu}}" size="12" onKeyUp="mascaraMoeda(this, event)">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="street" class="form-label">Rua</label>
      <input type="text" class="form-control required" id="street" name="street" value="{{$property->street}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="neighborhood" class="form-label">Bairro</label>
      <input type="text" class="form-control required" id="neighborhood" name="neighborhood" value="{{$property->neighborhood}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="city" class="form-label">Cidade</label>
      <input type="text" class="form-control required" id="city" name="city" value="{{$property->city}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="number" class="form-label">Número</label>
      <input type="text" class="form-control required" id="number" name="number" value="{{$property->number}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="state" class="form-label">Estado</label>
      <input type="text" class="form-control required" id="state" name="state" value="{{$property->state}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="squareMeters" class="form-label">Metros quadrados</label>
      <input type="number" class="form-control required" id="squareMeters" name="squareMeters" value="{{$property->squareMeters}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="bedrooms" class="form-label">Quartos</label>
      <input type="number" class="form-control required" id="bedrooms" name="bedrooms" value="{{$property->bedrooms}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="bathroom" class="form-label">Banheiros</label>
      <input type="number" class="form-control required" id="bathroom" name="bathroom" value="{{$property->bathroom}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="carSpaces" class="form-label">Vagas para Carros</label>
      <input type="number" class="form-control required" id="carSpaces" name="carSpaces" value="{{$property->carSpaces}}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="description">Descrição do imóvel</label>
      <textarea class="form-control required" id="description" name="description" style="height: 100px">{{$property->description}}</textarea>
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Atualizar propriedade">
    </div>
  </form>
</div>
<script src="{{asset('js/propertyCreate.js')}}"></script>

@endsection