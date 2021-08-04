@extends('THEMES.SITE.mainPages')
@section('titlePage','Quem Somos - Via escolar')
@section('titleHeader','Quem Somos')
@section('content')

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{ asset('img/onibus_escolar_02-1024x683.jpg') }}"  alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="section-header text-left">
                                <p>Bem-vindo ao Via Escolar</p>
                                <h2>A mais de 2 Anos no mercado</h2>
                            </div>
                            <div class="about-text">
                                <p class="text-justify">
                                    O VIA ESCOLAR é uma ferramenta registrada e patenteada, com foco no atendimento ao transporte escolar público, a qual possui excelência na integração de todos os processos que envolvem desde a contratação, prestação da atividade, fiscalização, liquidação da despesa e controle.
                                </p>
                                <p class="text-justify">
                                    A fim de contribuir para melhoria do transporte escolar, desenvolvemos um produto único, exclusivo e parametrizado as necessidades dos entes públicos que realizam o transporte de educandos.
                                </p>
                                <p class="text-justify">
                                    Nossa plataforma é inovadora, moderna e adequada as necessidades, desenhada e entregue como uma solução tecnológica mais qualificada que atualmente existe no mercado, com uma contínua modernização e melhoria.

                                </p>
                                <p class="text-justify">
                                    Atualmente conta com 48 entidades públicas utilizando, mais de 30 mil alunos, 1.500 rotas e uma crescente constante por ser uma plataforma genuína e exclusiva ao seguimento público de controle e gestão total do transporte escolar.

                                </p >
                                <p class="text-justify">
                                    A experiência da SISPEL alia este produto de altíssima qualidade, mantendo um atendimento de excelência em todas as etapas: venda, consultoria, implantação, manutenção, treinamento e suporte.

                                </p>
                                {{-- <a class="btn" href="">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

@endsection

