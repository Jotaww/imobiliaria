@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/listaImovel.css')}}">

@section('content')
@if(session('msg'))
<p class="msg">{{ session('msg') }}</p>
@endif

<div class="container">
  <div class="table-responsive">
    <table class="table table-striped table-hover" id="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Propriedade</th>
          <th>Cliente</th>
          <th>...</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($sales as $sale)
        <tr>
          <td>{{$sale->id}}</td>
          <td><img src="{{asset('image/imoveis/'.$sale->property->mainPhoto)}}" id="photoImovelList" alt=""></td>
          <td>{{$sale->client->name}}</td>
          <td id="btnList">
            <a href="/moderar/venda/{{ $sale->client_id }}/{{ $sale->property_id }}/{{$sale->id}}" class="btn btn-success">Moderar</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$sale->id}}">Deletar</button>
            <div class="modal fade" id="exampleModal{{$sale->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <h1 class="modal-title fs-5 pt-3 pb-3 text-center" id="exampleModalLabel">Você tem certeza de que deseja deletar?</h1>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <form action="/deletar/venda/{{$sale->id}}" method="post">
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
  {{-- <div class="d-flex justify-content-center">
    {{ $sales->appends(['search' => $search])->links() }}
  </div> --}}
</div>

@endsection