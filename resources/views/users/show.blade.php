@extends('layouts.app')

@section('title','Listagem do Usuário')

@section('content')
    <h1>Listagem do usuário  {{$user->name}}</h1>

    <ul>
        <li>{{ $user->name}}
        <li>{{ $user->email}} 
    </ul>

<form action="{{  route('users.delete', $user->id)}}" method = "POST">
    @method('DELETE')
    @csrf

    <button type = "submit">DELETAR</button> 
</form>

@endsection