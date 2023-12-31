@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            <div class="row">
                @foreach ($cursos as $curso)
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset($cursos->imagem)}}">
                            <img src="images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <h4>{{$curso->titulo}}</h4>
                            <p>{{$curso->descricao}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver mais...</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection
