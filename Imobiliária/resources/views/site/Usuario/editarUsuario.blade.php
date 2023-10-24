@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')

<div class="container">
  <form action="" method="post" id="formInfo" class="formInfo">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" form="formInfo" value="{{$user->name}}" required autofocus autocomplete="name">
      <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" form="formInfo" value="{{$user->email}}" required autocomplete="username">
      <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Permissão</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="permission" value="3" id="administrativo" {{ $user->permission == 3 ? 'checked' : '' }}>
        <label class="form-check-label" for="administrativo">Administrativo</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="permission" value="2" id="comercial" {{ $user->permission == 2 ? 'checked' : '' }}>
        <label class="form-check-label" for="comercial">Comercial</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="permission" value="1" id="financeiro" {{ $user->permission == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="financeiro">Financeiro</label>
      </div>
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Salvar" form="formInfo">
    </div>
  </form>

  <hr class="mt-4 mb-4">
  
  <form action="/atualizar/senha/{{$user->id}}" method="post" id="formPassword" class="formPassword">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="current_password" class="form-label">Senha atual</label>
      <input type="password" class="form-control" id="current_password" name="current_password" form="formPassword" required autocomplete="new-password">
      <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 errorValidation" />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Nova senha</label>
      <input type="password" class="form-control" id="password" name="password" form="formPassword" required autocomplete="new-password">
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirmação de nova Senha</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" form="formPassword" required autocomplete="new-password">
      <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 errorValidation" />
      <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 errorValidation" />
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Salvar Senha" form="formPassword">
    </div>
  </form>
</div>

@endsection