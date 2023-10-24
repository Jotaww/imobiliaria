@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>   

@section('content')

<div class="container">
  <form action="" method="post" enctype="multipart/form-data" id="form">
    @csrf
    <div class="mb-3">
      <label for="mainPhoto" class="form-label">Foto principal</label>
      <input type="file" class="form-control required" id="mainPhoto" name="mainPhoto">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="photos" class="form-label">Fotos</label>
      <input type="file" class="form-control required" id="photos" name="photos[]" multiple>
      <span class="span-required" id="span-required-file">Selecione 6 Fotos</span>
    </div>
    <div class="mb-3">
      <label for="casa" class="form-label">Tipo do imóvel</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Casa" name="propertyType" id="casa" checked>
        <label class="form-check-label" for="casa">Casa</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="Apartamento" name="propertyType" id="apartamento">
        <label class="form-check-label" for="apartamento">Apartamento</label>
      </div>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Valor</label>
      <input type="text" class="form-control required" id="price" name="price" size="12" onKeyUp="mascaraMoeda(this, event)" placeholder="Ex. 000.000">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="condominium" class="form-label">Condomínio</label>
      <input type="text" class="form-control required" id="condominium" name="condominium" size="12" onKeyUp="mascaraMoeda(this, event)" value="0">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="iptu" class="form-label">IPTU</label>
      <input type="text" class="form-control required" id="iptu" name="iptu" size="12" onKeyUp="mascaraMoeda(this, event)" value="0">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="street" class="form-label">Rua</label>
      <input type="text" class="form-control required" id="street" name="street" placeholder="Ex. Rua Fulano">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="neighborhood" class="form-label">Bairro</label>
      <input type="text" class="form-control required" id="neighborhood" name="neighborhood" placeholder="Ex. Ciclano">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="city" class="form-label">Cidade</label>
      <input type="text" class="form-control required" id="city" name="city" placeholder="Ex. Beltrano">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="number" class="form-label">Número</label>
      <input type="text" class="form-control required" id="number" name="number">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="state" class="form-label">Estado</label>
      <input type="text" class="form-control required" id="state" name="state" placeholder="Ex. RS">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="squareMeters" class="form-label">Metros quadrados</label>
      <input type="number" class="form-control required" id="squareMeters" name="squareMeters">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="bedrooms" class="form-label">Quartos</label>
      <input type="number" class="form-control required" id="bedrooms" name="bedrooms">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="bathroom" class="form-label">Banheiros</label>
      <input type="number" class="form-control required" id="bathroom" name="bathroom">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="carSpaces" class="form-label">Vagas para Carros</label>
      <input type="number" class="form-control required" id="carSpaces" name="carSpaces">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="description">Descrição do imóvel</label>
      <textarea class="form-control required" id="description" name="description" style="height: 100px"></textarea>
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Registrar propriedade">
    </div>
  </form>
</div>
<script src="{{asset('js/propertyCreate.js')}}"></script>

@endsection