@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')

<div class="container">
  <form action="" method="post" id="form">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control required" id="name" name="name" autofocus autocomplete="name" value="{{ $user->name }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control required" id="email" name="email" autocomplete="email"  onsubmit="emailValidate()" value="{{ $user->email }}">
      <span class="span-required">Digite um email válido</span>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Celular</label>
      <input type="text" class="form-control required" id="phone" name="phone" autocomplete="phone" maxlength="15" onkeyup="handlePhone(event)" value="{{ $user->phone }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="birthDate" class="form-label">Data de nascimento</label>
      <input type="date" class="form-control required" id="birthDate" name="birthDate" autocomplete="birthDate" value="{{ $user->birthDate }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="cpf" class="form-label">Cpf</label>
      <input type="text" class="form-control required" id="cpf" name="cpf" autocomplete="cpf" onblur="validarCpf()" value="{{ $user->cpf }}">
      <span class="span-required">CPF inválido</span>
    </div>
    <div class="mb-3">
      <label for="city" class="form-label">Cidade</label>
      <input type="text" class="form-control required" id="city" name="city" autocomplete="city" value="{{ $user->city }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="street" class="form-label">Rua</label>
      <input type="text" class="form-control required" id="street" name="street" autocomplete="street" value="{{ $user->street }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="neighborhood" class="form-label">Bairro</label>
      <input type="text" class="form-control required" id="neighborhood" name="neighborhood" autocomplete="neighborhood" value="{{ $user->neighborhood }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="numHouse" class="form-label">Nº casa</label>
      <input type="text" class="form-control required" id="numHouse" name="numHouse" autocomplete="numHouse" value="{{ $user->numHouse }}">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Atualizar Cliente">
    </div>
  </form>
</div>

<script src="{{asset('js/userRegister.js')}}"></script>

@endsection