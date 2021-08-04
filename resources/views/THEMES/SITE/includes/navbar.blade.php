<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">Menu</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ route('site.home') }}" class="nav-item nav-link {{ Request::segment(1) === null ? 'active' : null }}">Inicio</a>
                    <a href="{{ route('site.about') }}" class="nav-item nav-link {{ Request::segment(1) === 'quem-somos' ? 'active' : null }}">Quem Somos</a>
                    <a href="{{ route('site.client') }}" class="nav-item nav-link {{ Request::segment(1) === 'clientes' ? 'active' : null }}">Clientes</a>
                    <a href="{{ route('site.functionalities') }}" class="nav-item nav-link {{ Request::segment(1) === 'funcionalidades' ? 'active' : null }}">Funcionalidades</a>
                    <a href="{{ route('site.blog') }}" class="nav-item nav-link {{ Request::segment(1) === 'blog' ? 'active' : null }}">Blog</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog Page</a>
                            <a href="single.html" class="dropdown-item">Single Page</a>
                        </div>
                    </div> --}}
                    <a href="{{ route('site.contact') }}" class="nav-item nav-link {{ Request::segment(1) === 'contatos' ? 'active' : null }}">Contato</a>
                </div>
                <div class="ml-auto">
                    <a class="btn" href="http://sistema.viaescolar.com.br/#">
                        <img src="{{ asset('img/logoVia.png') }}" width="25px"  alt="Via Escolar"> Sistema Via escolar</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
