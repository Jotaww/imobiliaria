@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/catalog.css')}}">

@section('content')

<div class="searchCatalog">
  <h1>Encontre um lar para chamar de seu.</h1>
  <form action="" method="get" class="formCatalog" id="formFilter">
    <div class="seacrch">
      <label for="location" class="form-label">Onde deseja morar?</label>
      <input type="text" class="form-control" id="location" name="location" value="{{ request('location') }}" placeholder="Digite o nome da rua, bairro ou cidade">
    </div>
    <input type="submit" value="Buscar" class="btnSearchCatalog">
    <div class="results container">
      <span>{{ $count }} resultados</span>
      @if (request('location'))
      <a href="{{ route('catalogo', array_merge($filterLocation)) }}" class="btn btn-secondary btn-sm">Localização <i class="bi bi-x-circle-fill"></i></a>
      @endif
      @if (request('type'))
      <a href="{{ route('catalogo', array_merge($filterType)) }}" class="btn btn-secondary btn-sm">Tipo <i class="bi bi-x-circle-fill"></i></a>
      @endif
      @if (request('price'))
      <a href="{{ route('catalogo', array_merge($filterPrice)) }}" class="btn btn-secondary btn-sm">Preço <i class="bi bi-x-circle-fill"></i></a>
      @endif
      @if (request('meters'))
      <a href="{{ route('catalogo', array_merge($filterMeters)) }}" class="btn btn-secondary btn-sm">Metros <i class="bi bi-x-circle-fill"></i></a>
      @endif
      @if (request('bedrooms'))
      <a href="{{ route('catalogo', array_merge($filterBedrooms)) }}" class="btn btn-secondary btn-sm">Quartos <i class="bi bi-x-circle-fill"></i></a>
      @endif
      @if (request('bathroom'))
      <a href="{{ route('catalogo', array_merge($filterBathroom)) }}" class="btn btn-secondary btn-sm">Banheiros <i class="bi bi-x-circle-fill"></i></a>
      @endif
      @if (request('car'))
      <a href="{{ route('catalogo', array_merge($filterCar)) }}" class="btn btn-secondary btn-sm">Vagas <i class="bi bi-x-circle-fill"></i></a>
      @endif
    </div>
    <div class="select container">
      <select class="form-select" id="firstSelect" name="type">
        <option value="">Tipo de imóvel</option>
        <option value="1" {{ request('type') == "1" ? 'selected' : '' }}>Casa</option>
        <option value="2" {{ request('type') == "2" ? 'selected' : '' }}>Apartamento</option>
      </select>
      <select class="form-select" name="price" id="price">
        <option value="">Preço</option>
        <option value="1" {{ request('price') == "1" ? 'selected' : '' }}>Abaixo de R$150.000</option>
        <option value="2" {{ request('price') == "2" ? 'selected' : '' }}>Abaixo de R$250.000</option>
        <option value="3" {{ request('price') == "3" ? 'selected' : '' }}>Abaixo de R$500.000</option>
      </select>
      <select class="form-select" id="meters" name="meters">
        <option value="">Metros quadrados</option>
        <option value="1" {{ request('meters') == "1" ? 'selected' : '' }}>Abaixo de 60m²</option>
        <option value="2" {{ request('meters') == "2" ? 'selected' : '' }}>Abaixo de 90m²</option>
        <option value="3" {{ request('meters') == "3" ? 'selected' : '' }}>Abaixo de 120m²</option>
      </select>
      <select class="form-select" id="bedrooms" name="bedrooms">
        <option value="">Quartos</option>
        <option value="1" {{ request('bedrooms') == "1" ? 'selected' : '' }}>1</option>
        <option value="2" {{ request('bedrooms') == "2" ? 'selected' : '' }}>2</option>
        <option value="3" {{ request('bedrooms') == "3" ? 'selected' : '' }}>3</option>
        <option value="4" {{ request('bedrooms') == "4" ? 'selected' : '' }}>4</option>
        <option value="5" {{ request('bedrooms') == "5" ? 'selected' : '' }}>5</option>
      </select>
      <select class="form-select" id="bathroom" name="bathroom">
        <option value="">Banheiros</option>
        <option value="1" {{ request('bathroom') == "1" ? 'selected' : '' }}>1</option>
        <option value="2" {{ request('bathroom') == "2" ? 'selected' : '' }}>2</option>
        <option value="3" {{ request('bathroom') == "3" ? 'selected' : '' }}>3</option>
        <option value="4" {{ request('bathroom') == "4" ? 'selected' : '' }}>4</option>
        <option value="5" {{ request('bathroom') == "5" ? 'selected' : '' }}>5</option>
      </select>
      <select class="form-select" id="lastSelect" name="car">
        <option value="">Vagas para carros</option>
        <option value="1" {{ request('car') == "1" ? 'selected' : '' }}>1</option>
        <option value="2" {{ request('car') == "2" ? 'selected' : '' }}>2</option>
        <option value="3" {{ request('car') == "3" ? 'selected' : '' }}>3</option>
        <option value="4" {{ request('car') == "4" ? 'selected' : '' }}>4</option>
        <option value="5" {{ request('car') == "5" ? 'selected' : '' }}>5</option>
      </select>
    </div>
  </form>
</div>

<div class="container">
  <div class="properties mt-3">

    @foreach ($properties as $property)
    <a class="property" href="/imovel/{{$property->id}}">
      <div>
        <img src="{{asset('image/imoveis/'.$property->mainPhoto)}}" alt="">
        <div class="propertyDesc">
          <p>{{$property->street}}</p>
          <span>{{$property->neighborhood}}, {{$property->city}}</span>
          <div class="mb-3">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 3A1.75 1.75 0 0 0 7 4.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0 0 21 15.25V4.75A1.75 1.75 0 0 0 19.25 3H8.75ZM10 15a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-8Z" fill="currentColor"></path><path d="M6 19a1 1 0 0 1-1-1V6a1 1 0 0 0-2 0v13a2 2 0 0 0 2 2h13a1 1 0 1 0 0-2H6Z" fill="currentColor"></path></svg>
            <span>{{$property->squareMeters}}m²</span>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 3a3 3 0 0 1 3 3v3c1.214.912 2 2.364 2 4v7a1 1 0 0 1-1 1h-2v-2H5v2H3a1 1 0 0 1-1-1v-7c0-1.636.786-3.088 2-4V6a3 3 0 0 1 3-3h3c.768 0 1.47.29 2 .764A2.989 2.989 0 0 1 14 3h3ZM6 6v2h5V6c0-.551-.449-1-1-1H7c-.551 0-1 .449-1 1Zm14 7a2.98 2.98 0 0 0-.879-2.121A2.98 2.98 0 0 0 17 10H7a2.98 2.98 0 0 0-2.121.879A2.98 2.98 0 0 0 4 13v1h16v-1Zm0 4v-1H4v1h16ZM13 6v2h5V6c0-.551-.449-1-1-1h-3c-.551 0-1 .449-1 1Z" fill="currentColor"></path></svg>
            <span>{{$property->bedrooms}}</span>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 11h12V9a2 2 0 0 0-2-2h-3V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v17a1 1 0 1 0 2 0V4h9v3h-3a2 2 0 0 0-2 2v2Zm1.912 5a.912.912 0 0 1-.912-.912V13h2v2.037a.963.963 0 0 1-.963.963h-.125Zm4 3a.912.912 0 0 1-.912-.912V13h2v5.037a.963.963 0 0 1-.963.963h-.125ZM18 15.088c0 .504.408.912.912.912h.125a.963.963 0 0 0 .963-.963V13h-2v2.088Z" fill="currentColor"></path></svg>
            <span>{{$property->bathroom}}</span>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM9 13.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" fill="currentColor"></path><path d="M15.843 2H8.157a3 3 0 0 0-2.935 2.38L4.445 8.05A3.001 3.001 0 0 0 2 11v9a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2v-9a3 3 0 0 0-2.445-2.949l-.777-3.672A3 3 0 0 0 15.843 2ZM19 10a1 1 0 0 1 1 1v6H4v-6a1 1 0 0 1 1-1h14Zm-1.5-2h-11l.678-3.207a1 1 0 0 1 .862-.786L8.157 4h7.686a1 1 0 0 1 .948.68l.03.113L17.5 8Z" fill="currentColor"></path></svg>
            <span>{{$property->carSpaces}}</span>
          </div>
          <h5>R$ {{$property->price}}</h5>
        </div>
      </div>
    </a>
    @endforeach

  </div>
  <div class="d-flex justify-content-center mb-5 mt-5">
    {{ $properties->appends(['location' => request('location'), 'type' => request('type'), 'price' => request('price'), 'meters' => request('meters'), 'bedrooms' => request('bedrooms'), 'bathroom' => request('bathroom'), 'car' => request('car')])->links() }}
  </div>
</div>

<script src="{{asset('js/catalog.js')}}"></script>

@endsection