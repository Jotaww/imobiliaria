@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/listaImovel.css')}}">

@section('content')

<div class="container">
  <div class="registerAndSearch mb-5">
    <form action="" method="get">
      <input type="text" class="form-control" name="search" id="search" placeholder="Buscar" value="{{request('search')}}">
    </form>
  </div>
  <div class="table-responsive">
      <table class="table table-striped table-hover" id="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Permissão</th>
            <th scope="col">Propriedade</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($pendings as $pending)
          <tr>
            <th scope="row">{{$pending->id}}</th>
            <td>{{$pending->name}}</td>
            <td>{{$pending->email}}</td>
            <td>{{$pending->phone}}</td>
            <td><a href="/imovel/{{ $pending->property->id }}"><img src="{{asset('image/imoveis/'.$pending->property->mainPhoto)}}" id="photoImovelList" alt=""></a></td>
            <td>
              <a href="/atualizar/pendente/{{$pending->id}}" class="btn btn-success btn-sm me-2">Atendido</a>
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pending->id}}">Deletar</button>
              <div class="modal fade" id="exampleModal{{$pending->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 class="modal-title fs-5 pt-3 pb-3 text-center" id="exampleModalLabel">Você tem certeza de que deseja deletar?</h1>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      <form action="/deletar/pendente/{{$pending->id}}" method="post">
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

      <div class="d-flex justify-content-center">
        {{ $pendings->appends(['search' => $search])->links() }}
      </div>

  </div>
</div>

@endsection