@extends('layouts.home')
<link rel="stylesheet" href="{{asset('css/registrarImovel.css')}}">

@section('content')

<div class="container">
  <form action="" method="post" id="form">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control required" id="name" name="name" :value="old('name')" autofocus autocomplete="name">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control required" id="email" name="email" :value="old('email')" autocomplete="email"  onsubmit="emailValidate()">
      <span class="span-required">Digite um email válido</span>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Celular</label>
      <input type="text" class="form-control required" id="phone" name="phone" :value="old('phone')" autocomplete="phone" maxlength="15" onkeyup="handlePhone(event)">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="birthDate" class="form-label">Data de nascimento</label>
      <input type="date" class="form-control required" id="birthDate" name="birthDate" :value="old('birthDate')" autocomplete="birthDate">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="cpf" class="form-label">Cpf</label>
      <input type="text" class="form-control required" id="cpf" name="cpf" :value="old('cpf')" autocomplete="cpf" onblur="validarCpf()">
      <span class="span-required">CPF inválido</span>
    </div>
    <div class="mb-3">
      <label for="street" class="form-label">Rua</label>
      <input type="text" class="form-control required" id="street" name="street" :value="old('street')" autocomplete="street">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="neighborhood" class="form-label">Bairro</label>
      <input type="text" class="form-control required" id="neighborhood" name="neighborhood" :value="old('neighborhood')" autocomplete="neighborhood">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="city" class="form-label">Cidade</label>
      <input type="text" class="form-control required" id="city" name="city" :value="old('city')" autocomplete="city">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div class="mb-3">
      <label for="numHouse" class="form-label">Nº casa</label>
      <input type="text" class="form-control required" id="numHouse" name="numHouse" :value="old('numHouse')" autocomplete="numHouse">
      <span class="span-required">Campo obrigatório</span>
    </div>
    <div>
      <input class="btn btn-success" type="submit" value="Registrar cliente">
    </div>
  </form>
</div>

<script src="{{asset('js/userRegister.js')}}"></script>

@endsection