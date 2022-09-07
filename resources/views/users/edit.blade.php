@extends('layouts.app')

@section('title', 'Editar o Usuário {  $user->name  }')

@section('content')
<h1>Editar o Usuário {{  $user->name  }}</h1>

@if($errors->any())
    <ul class ='errors'>
        @foreach ($errors->all() as $error)
            <li class ='error'>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    <input type="hidden" name="_method" value = "PUT">
    <!-- {{ csrf_token()}} serve para visualizar o token obrigatório para formulários -->
    @csrf
    <input type="text" name="name" placeholder="Nome: " value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail: " value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha: ">
    <button type="submit">
        Enviar
    </button>
</form>
@endsection
