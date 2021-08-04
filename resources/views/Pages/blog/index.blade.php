@extends('THEMES.SITE.mainPages')
@section('titlePage','Blog - Via escolar')
@section('titleHeader','Blog')
@section('content')
 <!-- Blog Start -->
 <div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Notícias mais recentes</p>
            <h2>Últimas Notícias do nosso blog</h2>
        </div>
        <div class="row blog-page">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('img/blog/onibus_escolar_03-300x200.jpg') }}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>TCE - resultado da auditoria do transporte escolar</h3>
                        <a class="btn" href="{{ route('site.detail') }}">+</a>
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
                        <a class="btn" href="{{ route('site.detail') }}">+</a>
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
                        <a class="btn" href="{{ route('site.detail') }}">+</a>
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
        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    {{-- <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                    <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
