@extends('layouts.app')

@section('title','Listagem do Usuário')

@section('content')
    <h1>Listagem do usuário  {{$user->name}}</h1>

    <ul>
        <li>{{ $user->name}}
        <li>{{ $user->email}} 
    </ul>

@endsection