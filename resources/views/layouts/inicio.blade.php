@extends('site.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col textHomeGeral">
                <h5>Olá, seja bem vindo! Eu Sou</h5>
                <h3>Felipe Thiago Santana da Silva</h3>
                <h1 class="textHomeDev">Desenvolvedor <br> FullStack</h1>
                <div class="row container-sm">
                    <div class="col-6 col-sm-3">
                        <button type="button" class="custom-btn">Contato</button>
                    </div>
                    <div class="col-6 col-sm-4">
                        <button type="button" class="btn btn-outline-secondary">Download CV</button>
                    </div>
                </div>
            </div>
            <div class="col dvTop">
                <img src="img/perfil.png" class="imgPefil">
            </div>
        </div>
    </div>
@endsection
