@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')
<h1>Novo Usuário</h1>


<form action="{{ route('users.store') }}" method="post">
    <!-- {{ csrf_token()}} serve para visualizar o token obrigatório para formulários -->
    @csrf
    <input type="text" name="name" placeholder="Nome: ">
    <input type="email" name="email" placeholder="E-mail: ">
    <input type="password" name="password" placeholder="Senha: ">
    <button type="submit">
        Enviar
    </button>
</form>
@endsection
