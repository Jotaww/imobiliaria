@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')

<div class="container">
  <form action="" method="post" id="form">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control required" id="name" name="name" autofocus>
      <span class="span-required">Campo obrigatório</span>
      <x-input-error :messages="$errors->get('name')" class="mt-2 errorValidation" />
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control required" id="email" name="email" autocomplete="email" onsubmit="emailValidate()">
      <span class="span-required">Digite um email válido</span>
      <x-input-error :messages="$errors->get('email')" class="mt-2 errorValidation" />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input type="password" class="form-control required" id="password" name="password" autocomplete="new-password">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirmação de Senha</label>
      <input type="password" class="form-control required" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
      <span class="span-required">Campo obrigatório</span>
      <x-input-error :messages="$errors->get('password')" class="mt-2 errorValidation" />
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Permissão</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="permission" value="3" id="administrativo" checked>
        <label class="form-check-label" for="administrativo">Administrativo</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="permission" value="2" id="comercial">
        <label class="form-check-label" for="comercial">Comercial</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="permission" value="1" id="financeiro">
        <label class="form-check-label" for="financeiro">Financeiro</label>
      </div>
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Registrar">
    </div>
  </form>
</div>
<script src="{{asset('js/userRegister.js')}}"></script>

@endsection