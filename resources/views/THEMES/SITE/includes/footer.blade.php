    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h2>Contato do escritório</h2>
                        <p><i class="fa fa-map-marker-alt"></i>2535 Rua Maringa, Ji Paraná, Rondônia </p>
                        <p><i class="fa fa-phone-alt"></i>+055 (69) 3424-9142</p>
                        <p><i class="fa fa-envelope"></i>contato@viaescolar.com</p>
                        <div class="footer-social">
                            {{-- <a href=""><i class="fab fa-twitter"></i></a> --}}
                            <a href="https://www.facebook.com/viaescolarbrasil/"><i class="fab fa-facebook-f"></i></a>
                            {{-- <a href=""><i class="fab fa-youtube"></i></a> --}}
                            <a href="https://www.instagram.com/viaescolarbrasil/"><i class="fab fa-instagram"></i></a>
                            <a href="https://api.whatsapp.com/send?text=*Contato%20%E2%80%93%20Via%20Escolar*https://viaescolar.com/contato/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Áreas de Serviços</h2>
                        <a href="">Transporte Escolar</a>
                        {{-- <a href="">House Renovation</a>
                        <a href="">Architecture Design</a>
                        <a href="">Interior Design</a>
                        <a href="">Painting</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Páginas Úteis</h2>
                        <a href="{{ route('site.about') }}">Quem Somos</a>
                        <a href="{{ route('site.contact') }}">Contato</a>
                        <a href="{{ route('site.functionalities') }}">Funcionalidades</a>
                        {{-- <a href="">Projects</a> --}}
                        {{-- <a href="">Testimonial</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="newsletter">
                        <h2>Quer receber as novidades no seu e-mail?</h2>
                        <p>
                            Fica tranquilo, também odeio SPAM!

                            Seu e-mail está seguro comigo. ❤️
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">Termos de uso</a>
                <a href="">Políticas de Privacidade</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">Via Escolar</a>, Todos os Direitos Reservados.</p>
                </div>
                <div class="col-md-6">
                    <p>Desenvolvido por <a href="https://sispel-ro.com.br/">SISPEL</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/slick/slick.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
@yield('jsMain')
</body>
</html>

