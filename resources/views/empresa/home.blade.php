
@extends('empresa/layout')

@section('title', 'Home')

@section('content')

<div class="row cotaniner">

    @foreach ($produtos as $produto)
        
        <div class="col s12 m3">
            <div class="card">

                <div class="card-image">
                    <img src="{{ $produto->imagem }}">

                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                
                <div class="card-content">
                    <span class="card-title">{{ $produto->nome }}</span>
                    <p>{{ Str::limit($produto->descricao, 45) }}</p>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
