@extends('THEMES.SITE.mainPrincipal')
@section('titlePage','Início - Via escolar')
@section('content')
<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/onibus_escolar_03-300x200.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Nosso Foco para o Setor Público e Privado</p>
                <h1 class="animated fadeInLeft">
                    Controle efetivo de todos os gastos, custos e envolvidos no processo


                </h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Obter uma cotação</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/onibus_escolar_01.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Nosso Foco para o Setor Público e Privado</p>
                <h1 class="animated fadeInLeft">Melhorar o controle e qualidade do transporte escolar</h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Obter uma cotação</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/onibus_escolar_05-300x200.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Nosso Foco para o Setor Público e Privado</p>
                <h1 class="animated fadeInLeft">Gestão integrado do aluno, do transporte e das instituições de ensino envolvidas</h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Obter uma cotação</a>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                     <i class="flaticon-address"></i>

                    </div>
                    <div class="feature-text">
                        <h3>Geo Posicionamento</h3>
                        <p>Permitindo a criação eletrônica de georreferenciamento<span id="points">...</span>
                        <span id="plus">dos percursos, trajetos e rotas realizadas pelo transporte escolar, possibilitando simulações</span><a style="cursor: pointer; color:#333"  onclick="readMore()" id="l1">Leia mais</a>

                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Controle de custos</h3>
                        <p>Detalhameto dos custos fixos (salario, tributo, depreciação, entre outros)<span id="points2">...</span>
                            <span id="plus2"> Como também os custos variáveis (combustível, rodagem, manutenção etc.)</span><a style="cursor: pointer; color:#333"  onclick="readMore2()" id="l2">Leia mais</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Embarque e desembarque</h3>
                        <p>Disponibiliza plataforma móvel para que o monitor<span id="points3">...</span>
                        <span id="plus3"> possa fazer o controle de forma eletrônica o embarque e desembarque de cada aluno.</span><a style="cursor: pointer; color:#333"  onclick="readMore3()" id="l3">Leia mais</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Notícias mais recentes</p>
                        <h2>Últimas Notícias do nosso blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('img/blog/onibus_escolar_03-300x200.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>TCE - resultado da auditoria do transporte escolar</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p><a href="">20 de Julho 2020</a></p>
                                    {{-- <p>In<a href="">Construction</a></p> --}}
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Em outubro e novembro de 2016, o Tribunal de Contas Realizou auditoria em 51 municípios do Estado com objetivo de avaliar a ofertar e a qualidade
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('img/blog/onibus_escolar_08-300x200.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>FNDE Libera a Sexta Parcela do PNATE</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p><a href="">11 de Julho de 2020</a></p>
                                    {{-- <p>In<a href="">Construction</a></p> --}}
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Recursos transferidos a estados e municípios podem ser usados em consertos mecanicos e reforma dos veículos. Para apoiar a política de transporte
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('img/blog/onibus_escolar_05-300x200.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Verificação de Transporte Deficiente em todo País</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p><a href="">2 de Julho de 2020</a></p>
                                    {{-- <p>In<a href="">Construction</a></p> --}}
                                </div>
                                <div class="blog-text">
                                    <p>
                                        O Tribunal de Contas da União (TCU) apreciou, sob a relatoria do ministro Walton Alencar Rodrigues, relatório de consolidação da Fiscalização de Orientação Centralizada (FOC)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->


@endsection

@section('jsMain')

<script>
    function readMore(){
        let points=document.getElementById("points");
        let moreText=document.getElementById("plus");
        let btnReadMore=document.getElementById("l1");

        if(points.style.display === "none" ){
            points.style.display="inline";
            moreText.style.display="none";
            btnReadMore.innerHTML="Leia Mais"

        }else{
            points.style.display="none";
            moreText.style.display="inline";
            btnReadMore.innerHTML=". Leia Menos"
        }
    }

    function readMore2(){
        let points = document.getElementById("points2");
        let moreText = document.getElementById("plus2");
        let btnReadMore = document.getElementById("l2");

        if(points.style.display === "none" ){
            points.style.display="inline";
            moreText.style.display="none";
            btnReadMore.innerHTML="Leia Mais"

        }else{
            points.style.display="none";
            moreText.style.display="inline";
            btnReadMore.innerHTML=". Leia Menos"
        }
    }


    function readMore3(){
        let points=document.getElementById("points3");
        let moreText=document.getElementById("plus3");
        let btnReadMore=document.getElementById("l3");

        if(points.style.display === "none" ){
            points.style.display="inline";
            moreText.style.display="none";
            btnReadMore.innerHTML="Leia Mais"

        }else{
            points.style.display="none";
            moreText.style.display="inline";
            btnReadMore.innerHTML=". Leia Menos"
        }
    }
</script>



@endsection


