@extends('THEMES.SITE.mainPages')
@section('titlePage','Funcionalidades - Via escolar')
@section('titleHeader','Funcionalidades')
@section('content')
<!-- Video Start -->
<div class="video wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <button type="button" class="btn-play" data-toggle="modal" data-src="{{ asset("/video/vd_via_escolar.mp4") }}" data-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->

  <!-- About Start -->
  <div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div> --}}
            <div class="col-lg-12 col-md-6">
                <div class="section-header text-center">
                    {{-- <p>Welcome to Builderz</p> --}}
                    <h2>Gestão Integrada de Roteamento</h2>
                </div>
                <div class="about-text">
                    <p class="text-justify">
                        O via escolar permite que as rotas e viagens realizadas pelos ônibus sejam georeferência de metro a metro, o que trás uma precisão significativa para o controle de custo e do desgaste da frota. Ademais, o controle atráves de georreferenciamento implementado no sistema Viaescolar permite a aferição da velocidade média, de possíveis problemas na estada, assim como o tempo mínimo do percurso a ser realizado.
                        Destaca-se que o roteamento é uma das principais inteligências implementadas na aplicação, que coordenada diversos outros processos, como embarque e desembarque de aluno, custos, tempo e manutenção.
                        Implementar o roteamento por geoferenciamento é evoluir a administração do transporte escolar para novos patamares, permitindo a gestão pública e privada uma previsibilidade, controle efetivo e aferição correta de seus custos e gastos diários.
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div> --}}
            <div class="col-lg-12 col-md-6">
                <div class="section-header text-center">
                    {{-- <p>Welcome to Builderz</p> --}}
                    <h2>Gestão de Todos os Custos Envolvidos no Transporte</h2>
                </div>
                <div class="about-text">
                    <p class="text-justify">
                        A proposta do software e proporcionar ao Gestor de Transporte Escolar todos os custos referentes.
                        Detalhamento dos custos fixos (salário, tributo e depreciação, entre outros). Como também os custos variáveis (combustível, rodagem, manutenção etc.)
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div> --}}
            <div class="col-lg-12 col-md-6">
                <div class="section-header text-center">
                    {{-- <p>Welcome to Builderz</p> --}}
                    <h2>Gestão do Embarque e Desembarque dos Alunos</h2>
                </div>
                <div class="about-text">
                    <p class="text-justify">
                        Através da plataforma móvel o ViaEscolar permite que o monitor possa fazer o controle de forma eletrônica do embarque e desembarque de cada aluno.
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection

