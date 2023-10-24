@extends('layouts.home')

@section('content')
<div class="homeSearch mb-5">
  <div class="searchContent">
    <h1>Encontre um lar para chamar de seu.</h1>
    <div>
      <form action="/catalogo/casa" method="get" class="searchForm">
        <div class="me-4" id="tipoImovel">
          <label for="tipoImovel" class="form-label">Tipo de imóvel</label>
          <select class="form-select" name="type">
            <option value="">Todos os imóveis</option>
            <option value="1">Casa</option>
            <option value="2">Apartamento</option>
          </select>
        </div>
        <div class="me-4" id="locationInput">
          <label for="location" class="form-label">Onde deseja morar?</label>
          <input type="text" class="form-control" name="location" id="location" placeholder="Digite o nome da rua, bairro ou cidade">
        </div>
        <input type="submit" id="btnSearch" value="Buscar">
      </form>
    </div>
  </div>
</div>

<div class="imoveisContent">
  <div class="imoveisHighlights">
    <div class="titleImoveis mb-5">
      <h4>Casas</h4>
      <div id="divider"></div>
    </div>
    <div class="imoveis mt-3">

      @foreach ($houses as $house)
      <a class="imovel" href="/imovel/{{$house->id}}">
        <div>
          <img src="{{asset('image/imoveis/'.$house->mainPhoto)}}" alt="">
          <div class="imovelDesc">
            <p>{{$house->street}}</p>
            <span>{{$house->neighborhood}}, {{$house->city}}</span>
            <div class="mb-3">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 3A1.75 1.75 0 0 0 7 4.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0 0 21 15.25V4.75A1.75 1.75 0 0 0 19.25 3H8.75ZM10 15a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-8Z" fill="currentColor"></path><path d="M6 19a1 1 0 0 1-1-1V6a1 1 0 0 0-2 0v13a2 2 0 0 0 2 2h13a1 1 0 1 0 0-2H6Z" fill="currentColor"></path></svg>
              <span>{{$house->squareMeters}}m²</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 3a3 3 0 0 1 3 3v3c1.214.912 2 2.364 2 4v7a1 1 0 0 1-1 1h-2v-2H5v2H3a1 1 0 0 1-1-1v-7c0-1.636.786-3.088 2-4V6a3 3 0 0 1 3-3h3c.768 0 1.47.29 2 .764A2.989 2.989 0 0 1 14 3h3ZM6 6v2h5V6c0-.551-.449-1-1-1H7c-.551 0-1 .449-1 1Zm14 7a2.98 2.98 0 0 0-.879-2.121A2.98 2.98 0 0 0 17 10H7a2.98 2.98 0 0 0-2.121.879A2.98 2.98 0 0 0 4 13v1h16v-1Zm0 4v-1H4v1h16ZM13 6v2h5V6c0-.551-.449-1-1-1h-3c-.551 0-1 .449-1 1Z" fill="currentColor"></path></svg>
              <span>{{$house->bedrooms}}</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 11h12V9a2 2 0 0 0-2-2h-3V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v17a1 1 0 1 0 2 0V4h9v3h-3a2 2 0 0 0-2 2v2Zm1.912 5a.912.912 0 0 1-.912-.912V13h2v2.037a.963.963 0 0 1-.963.963h-.125Zm4 3a.912.912 0 0 1-.912-.912V13h2v5.037a.963.963 0 0 1-.963.963h-.125ZM18 15.088c0 .504.408.912.912.912h.125a.963.963 0 0 0 .963-.963V13h-2v2.088Z" fill="currentColor"></path></svg>
              <span>{{$house->bathroom}}</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM9 13.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" fill="currentColor"></path><path d="M15.843 2H8.157a3 3 0 0 0-2.935 2.38L4.445 8.05A3.001 3.001 0 0 0 2 11v9a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2v-9a3 3 0 0 0-2.445-2.949l-.777-3.672A3 3 0 0 0 15.843 2ZM19 10a1 1 0 0 1 1 1v6H4v-6a1 1 0 0 1 1-1h14Zm-1.5-2h-11l.678-3.207a1 1 0 0 1 .862-.786L8.157 4h7.686a1 1 0 0 1 .948.68l.03.113L17.5 8Z" fill="currentColor"></path></svg>
              <span>{{$house->carSpaces}}</span>
            </div>
            <h5>R$ {{$house->price}}</h5>
          </div>
        </div>
      </a>
      @endforeach

    </div>
  </div>
</div>

<div class="imoveisContent">
  <div class="imoveisHighlights">
    <div class="titleImoveis mb-5">
      <h4>Apartamentos</h4>
      <div id="divider"></div>
    </div>
    <div class="imoveis mt-3">

      @foreach ($apartments as $apartment)
      <a class="imovel" href="/imovel/{{$apartment->id}}">
        <div>
          <img src="{{asset('image/imoveis/'.$apartment->mainPhoto)}}" alt="">
          <div class="imovelDesc">
            <p>{{$apartment->street}}</p>
            <span>{{$apartment->neighborhood}}, {{$apartment->city}}</span>
            <div class="mb-3">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 3A1.75 1.75 0 0 0 7 4.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0 0 21 15.25V4.75A1.75 1.75 0 0 0 19.25 3H8.75ZM10 15a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-8Z" fill="currentColor"></path><path d="M6 19a1 1 0 0 1-1-1V6a1 1 0 0 0-2 0v13a2 2 0 0 0 2 2h13a1 1 0 1 0 0-2H6Z" fill="currentColor"></path>
              </svg><span>{{$apartment->squareMeters}}m²</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 3a3 3 0 0 1 3 3v3c1.214.912 2 2.364 2 4v7a1 1 0 0 1-1 1h-2v-2H5v2H3a1 1 0 0 1-1-1v-7c0-1.636.786-3.088 2-4V6a3 3 0 0 1 3-3h3c.768 0 1.47.29 2 .764A2.989 2.989 0 0 1 14 3h3ZM6 6v2h5V6c0-.551-.449-1-1-1H7c-.551 0-1 .449-1 1Zm14 7a2.98 2.98 0 0 0-.879-2.121A2.98 2.98 0 0 0 17 10H7a2.98 2.98 0 0 0-2.121.879A2.98 2.98 0 0 0 4 13v1h16v-1Zm0 4v-1H4v1h16ZM13 6v2h5V6c0-.551-.449-1-1-1h-3c-.551 0-1 .449-1 1Z" fill="currentColor"></path></svg>
              <span>{{$apartment->bedrooms}}</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 11h12V9a2 2 0 0 0-2-2h-3V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v17a1 1 0 1 0 2 0V4h9v3h-3a2 2 0 0 0-2 2v2Zm1.912 5a.912.912 0 0 1-.912-.912V13h2v2.037a.963.963 0 0 1-.963.963h-.125Zm4 3a.912.912 0 0 1-.912-.912V13h2v5.037a.963.963 0 0 1-.963.963h-.125ZM18 15.088c0 .504.408.912.912.912h.125a.963.963 0 0 0 .963-.963V13h-2v2.088Z" fill="currentColor"></path></svg>
              <span>{{$apartment->bathroom}}</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM9 13.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" fill="currentColor"></path><path d="M15.843 2H8.157a3 3 0 0 0-2.935 2.38L4.445 8.05A3.001 3.001 0 0 0 2 11v9a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2v-9a3 3 0 0 0-2.445-2.949l-.777-3.672A3 3 0 0 0 15.843 2ZM19 10a1 1 0 0 1 1 1v6H4v-6a1 1 0 0 1 1-1h14Zm-1.5-2h-11l.678-3.207a1 1 0 0 1 .862-.786L8.157 4h7.686a1 1 0 0 1 .948.68l.03.113L17.5 8Z" fill="currentColor"></path></svg>
              <span>{{$apartment->carSpaces}}</span>
            </div>
            <h5>R$ {{$apartment->price}}</h5>
          </div>
        </div>
      </a>
      @endforeach

    </div>
  </div>
</div>

@endsection