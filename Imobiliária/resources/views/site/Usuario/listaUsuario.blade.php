@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/listaImovel.css')}}">

@section('content')
@if(session('msg'))
<p class="msg">{{ session('msg') }}</p>
@endif

<div class="container">
  <div class="registerAndSearch mb-5">
    <a href="/registrar/usuario" class="btn btn-primary">Registrar Usuario</a>
    <form action="" method="get">
      <input type="text" class="form-control" name="search" id="search" placeholder="Buscar" value="{{request('search')}}">
    </form>
  </div>
  <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Permissão</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($users as $user)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->permission}}</td>
            <td class="d-flex">
              <a href="/editar/usuario/{{$user->id}}" class="btn btn-success btn-sm me-2">Editar</a>
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">Deletar</button>
              <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 class="modal-title fs-5 pt-3 pb-3 text-center" id="exampleModalLabel">Você tem certeza de que deseja deletar?</h1>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      <form action="/deletar/usuario/{{$user->id}}" method="post">
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
        {{ $users->appends(['search' => $search])->links() }}
      </div>

  </div>
</div>

@endsection