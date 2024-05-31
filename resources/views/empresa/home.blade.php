
@extends('empresa/layout')

@section('title', 'Home')

@section('content')

{{-- Isso é um comentário, e não será apresentado no código fonte --}}

{{-- Operador Ternário --}}
{{-- isset($name) ? 'existe' : 'não existe' --}}

{{-- Definir valor padrão para uma variável --}}
{{-- $test ?? 'default value' --}}

@if ($name == 'lucas')
    <p>{{ $name }}</p>
@else
    <p>{{ 'false' }}</p>
@endif

{{-- --}}

@unless ($name == 'lucas[1]') {{-- false --}}
    true
@else
    false
@endunless

@switch($age)
    @case(17)
        <p>{{ $age }} Young</p>
        @break

    @case(18)
        <p>{{ $age }} Old</p>
        @break

    @default
        <p>false</p>
        
@endswitch

@isset($name)
    {{ $name }}
@endisset

@empty($name)
    <p>Empty</p>
@endempty

@auth
    <p>true</p>
@endauth

@guest
    <p>Guest: true</p>
@endguest

@endsection
