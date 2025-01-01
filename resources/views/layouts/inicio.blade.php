@extends('site.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-home-quem-sou">
                <h5>Olá, seja bem vindo! Eu Sou</h5>
                <h3>Felipe Thiago Santana da Silva</h3>
                <h1 class="text-home-dev">Desenvolvedor <br> FullStack</h1>
                <div class="row container-sm">
                    <div class="col-6 col-sm-3">
                        <button type="button" class="custom-btn-boddy">Contato</button>
                    </div>
                    <div class="col-6 col-sm-4">
                        <button type="button" class="btn btn-outline-secondary">Download CV</button>
                    </div>
                </div>
            </div>
            <div class="col dv-top">
                <img src="img/perfil.png" class="img-perfil">
            </div>
        </div>
        <div>
            <h4 class="title-home">
                Quem Sou
            </h4>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/perfilCorpo.png" class="img-pefil-corpo">
            </div>
            <div class="col dv-bg-grey">
                <p class="text-home-quem-sou">
                    Sou Felipe atualmente tenho 28 anos, sou formado em Analise e Desenvolvimento de Sistema.
                    Moro na cidade de Uberaba-MG. Sou Desenvolvedor de Software fullstack web e mobile me considero uma
                    pessoa criativa e sempre penso em N maneiras de resolver um problema. 
                    Fico muito feliz de
                    compartilhar minha experiência profissional com você.
                </p>
                <button type="button" class="custom-btn-boddy">Saber mais</button>
            </div>
        </div>
        <div>
            <h4 class="title-home">
                Cursos
            </h4>
            <div class="container">
                <div class="row">
                    <div class="col dv-bg-grey">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-android2 fa" viewBox="0 0 16 16">
                            <path d="m10.213 1.471.691-1.26q.069-.124-.048-.192-.128-.057-.195.058l-.7 1.27A4.8 4.8 0 0 0 8.005.941q-1.032 0-1.956.404l-.7-1.27Q5.281-.037 5.154.02q-.117.069-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.7 3.7 0 0 0 3.5 5.02h9q0-1.125-.623-2.072a4.27 4.27 0 0 0-1.664-1.476ZM6.22 3.303a.37.37 0 0 1-.267.11.35.35 0 0 1-.263-.11.37.37 0 0 1-.107-.264.37.37 0 0 1 .107-.265.35.35 0 0 1 .263-.11q.155 0 .267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264m4.101 0a.35.35 0 0 1-.262.11.37.37 0 0 1-.268-.11.36.36 0 0 1-.112-.264q0-.154.112-.265a.37.37 0 0 1 .268-.11q.155 0 .262.11a.37.37 0 0 1 .107.265q0 .153-.107.264M3.5 11.77q0 .441.311.75.311.306.76.307h.758l.01 2.182q0 .414.292.703a.96.96 0 0 0 .7.288.97.97 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182q0 .414.292.703a.97.97 0 0 0 .71.288.97.97 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76q.436 0 .749-.308.31-.307.311-.75V5.365h-9zm10.495-6.587a.98.98 0 0 0-.702.278.9.9 0 0 0-.293.685v4.063q0 .406.293.69a.97.97 0 0 0 .702.284q.42 0 .712-.284a.92.92 0 0 0 .293-.69V6.146a.9.9 0 0 0-.293-.685 1 1 0 0 0-.712-.278m-12.702.283a1 1 0 0 1 .712-.283q.41 0 .702.283a.9.9 0 0 1 .293.68v4.063a.93.93 0 0 1-.288.69.97.97 0 0 1-.707.284 1 1 0 0 1-.712-.284.92.92 0 0 1-.293-.69V6.146q0-.396.293-.68"/>
                        </svg>
                        <h3>Android</h3>
                    </div>
                    <div class="col dv-bg-grey">
                        <h1>Teste</h1>
                    </div>
                    <div class="col dv-bg-grey">
                        <h1>Teste</h1>
                    </div>
                    <div class="col dv-bg-grey">
                        <h1>Teste</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
