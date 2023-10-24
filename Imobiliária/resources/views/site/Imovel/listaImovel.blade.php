@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/listaImovel.css')}}">

@section('content')
@if(session('msg'))
<p class="msg">{{ session('msg') }}</p>
@endif

<div class="container">
  <div class="registerAndSearch mb-5">
    <a href="/registrar/imovel" class="btn btn-primary">Registrar imóvel</a>
    <form action="" method="get">
      <input type="text" class="form-control" name="search" id="search" placeholder="Buscar" value="{{request('search')}}">
    </form>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-hover" id="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Imagem</th>
          <th>Rua</th>
          <th>Valor</th>
          <th>...</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($properties as $property)
        <tr>
          <td>{{$property->id}}</td>
          <td><img src="{{asset('image/imoveis/'.$property->mainPhoto)}}" id="photoImovelList" alt=""></td>
          <td>{{$property->street}}</td>
          <td>R$ {{$property->price}}</td>
          <td id="btnList">
            <a href="/editar/imovel/{{$property->id}}" class="btn btn-success btn-sm">Editar</a>
            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$property->id}}">Deletar</button>
            <div class="modal fade" id="exampleModal{{$property->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <h1 class="modal-title fs-5 pt-3 pb-3 text-center" id="exampleModalLabel">Você tem certeza de que deseja deletar?</h1>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <form action="/deletar/imovel/{{$property->id}}" method="post">
                      @csrf
                      @method('delete')
                      <input type="submit" class="btn btn-danger" value="Deletar">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-center">
    {{ $properties->appends(['search' => $search])->links() }}
  </div>
</div>

@endsection