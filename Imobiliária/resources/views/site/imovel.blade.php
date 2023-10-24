@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/imovel.css')}}">

@section('content')
@if(session('msg'))
<p class="msg">{{ session('msg') }}</p>
@endif

<div class="imgsImovel">
  <img src="{{asset('image/imoveis/'.$property->mainPhoto)}}" alt="">
  <div>
    <img id="imgImovelFirst" src="{{asset('image/imoveis/'.$property->photos[0])}}" alt="">
    <img src="{{asset('image/imoveis/'.$property->photos[1])}}" alt="">
  </div>
  <div>
    <img id="imgImovelFirst" src="{{asset('image/imoveis/'.$property->photos[2])}}" alt="">
    <img src="{{asset('image/imoveis/'.$property->photos[3])}}" alt="">
  </div>
  <div>
    <img id="imgImovelFirst" src="{{asset('image/imoveis/'.$property->photos[4])}}" alt="">
    <img src="{{asset('image/imoveis/'.$property->photos[5])}}" alt="">
  </div>
</div>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/imoveis/'.$property->mainPhoto)}}" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/imoveis/'.$property->photos[0])}}" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/imoveis/'.$property->photos[1])}}" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/imoveis/'.$property->photos[2])}}" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/imoveis/'.$property->photos[3])}}" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/imoveis/'.$property->photos[4])}}" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/imoveis/'.$property->photos[5])}}" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">

  <div class="infoImoveis me-3">
    <h2>{{$property->propertyType}} com {{$property->bedrooms}} @if ($property->bedrooms == 1) quarto @else quartos @endif e {{$property->bathroom}} @if ($property->bathroom == 1) banheiro @else banheiros @endif  à Venda, {{$property->squareMeters}} m² por R$ {{$property->price}}</h2>
    <p>{{$property->street}}, {{$property->number}} - {{$property->neighborhood}}, {{$property->city}} - {{$property->state}}</p>
    <div id="marginInfoSVG">
      <div>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 3A1.75 1.75 0 0 0 7 4.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0 0 21 15.25V4.75A1.75 1.75 0 0 0 19.25 3H8.75ZM10 15a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-8Z" fill="currentColor"></path><path d="M6 19a1 1 0 0 1-1-1V6a1 1 0 0 0-2 0v13a2 2 0 0 0 2 2h13a1 1 0 1 0 0-2H6Z" fill="currentColor"></path></svg>
        <span>{{$property->squareMeters}}m²</span>
      </div>
      <div>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 3a3 3 0 0 1 3 3v3c1.214.912 2 2.364 2 4v7a1 1 0 0 1-1 1h-2v-2H5v2H3a1 1 0 0 1-1-1v-7c0-1.636.786-3.088 2-4V6a3 3 0 0 1 3-3h3c.768 0 1.47.29 2 .764A2.989 2.989 0 0 1 14 3h3ZM6 6v2h5V6c0-.551-.449-1-1-1H7c-.551 0-1 .449-1 1Zm14 7a2.98 2.98 0 0 0-.879-2.121A2.98 2.98 0 0 0 17 10H7a2.98 2.98 0 0 0-2.121.879A2.98 2.98 0 0 0 4 13v1h16v-1Zm0 4v-1H4v1h16ZM13 6v2h5V6c0-.551-.449-1-1-1h-3c-.551 0-1 .449-1 1Z" fill="currentColor"></path></svg>
        @if ($property->bedrooms == '1')
        <span>{{$property->bedrooms}} quarto</span>
        @else
        <span>{{$property->bedrooms}} quartos</span>
        @endif
      </div>
      <div>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 11h12V9a2 2 0 0 0-2-2h-3V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v17a1 1 0 1 0 2 0V4h9v3h-3a2 2 0 0 0-2 2v2Zm1.912 5a.912.912 0 0 1-.912-.912V13h2v2.037a.963.963 0 0 1-.963.963h-.125Zm4 3a.912.912 0 0 1-.912-.912V13h2v5.037a.963.963 0 0 1-.963.963h-.125ZM18 15.088c0 .504.408.912.912.912h.125a.963.963 0 0 0 .963-.963V13h-2v2.088Z" fill="currentColor"></path></svg>
        @if ($property->bathroom == '1')
        <span>{{$property->bathroom}} banheiro</span>
        @else
        <span>{{$property->bathroom}} banheiros</span>
        @endif
      </div>
      <div>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM9 13.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" fill="currentColor"></path><path d="M15.843 2H8.157a3 3 0 0 0-2.935 2.38L4.445 8.05A3.001 3.001 0 0 0 2 11v9a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2v-9a3 3 0 0 0-2.445-2.949l-.777-3.672A3 3 0 0 0 15.843 2ZM19 10a1 1 0 0 1 1 1v6H4v-6a1 1 0 0 1 1-1h14Zm-1.5-2h-11l.678-3.207a1 1 0 0 1 .862-.786L8.157 4h7.686a1 1 0 0 1 .948.68l.03.113L17.5 8Z" fill="currentColor"></path></svg>
        @if ($property->carSpaces == '1')
        <span>{{$property->carSpaces}} vaga</span>
        @else
        <span>{{$property->carSpaces}} vagas</span>
        @endif
      </div>
    </div>
    <div class="imovelDescription" id="imovelDescription">
      <h5>{{$property->propertyType}} á venda no {{$property->street}} - {{$property->city}} - {{$property->state}}</h5>
      <p>{{$property->description}}</p>
    </div>
  </div>

  <div class="price">
    <div class="infoPrice">
      <h5>COMPRA</h5>
      <span>R$ {{$property->price}}</span>
      <div class="dividerPrice"></div>
    </div>
    <div class="infoADD">
      <div>
        @if ($property->condominium)
        <p>Condomínio</p>
        <p>R$ {{$property->condominium}}</p>
        @endif
      </div>
      <div>
        @if ($property->iptu)
        <p>IPTU</p>
        <p>R$ {{$property->iptu}}</p>
        @endif
      </div>
    </div>
    <div class="buyBtn">
      <!-- Button trigger modal -->
      <button type="button" id="infoBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Quero mais informação</button>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Meus dados de contato</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="form">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nome</label>
                  <input type="text" class="form-control required" id="name" name="name">
                  <span class="span-required" id="span-required">Campo obrigatório</span>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control required" id="email" name="email">
                  <span class="span-required" id="span-required">Campo obrigatório</span>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Telefone</label>
                  <input type="text" class="form-control required" id="phone" name="phone" maxlength="15" onkeyup="handlePhone(event)">
                  <span class="span-required" id="span-required">Campo obrigatório</span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="{{asset('js/formInfo.js')}}"></script>
@endsection