
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background: {{ $bg_section[0]->section_footer }}!important">
            <div class="container py-5" >
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6 col-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{ __('Restaurant.links') }}</h4>
                        <a class="btn btn-link" href="#About">{{ __('Restaurant.About us') }}</a>
                        <a class="btn btn-link" href="#service">{{ __('Restaurant.ServicesNav') }}</a>
                        <a class="btn btn-link" href="#Menu">{{ __('Restaurant.Menu') }}</a>
                        <a class="btn btn-link" href="#Gallery">{{ __('Restaurant.GalleryNav') }}</a>
                        <a class="btn btn-link" href="#contactUs">{{ __('Restaurant.Contact') }}</a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{ __('Restaurant.Contact') }}</h4>
                        <p class="mb-2"><i class="fab fa-whatsapp me-3"></i>{{ $Restaurants[0]->whatsapp }}</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $Restaurants[0]->phone }}</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ substr($Restaurants[0]->email,0,25) }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="{{ $Restaurants[0]->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $Restaurants[0]->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $Restaurants[0]->insta }}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $Restaurants[0]->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
                        <h4  class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{ __('home.Our Services') }}</h4>
                        @isset($Restaurant_Services)
                            @foreach ($Restaurant_Services as $Service )
                                <h5 class="text-light fw-normal"><i class="{{ $Service->icon }} text-primary mb-4"></i> - {{ (App::getLocale()=='en')?$Service->services_name:$Service->services_name_ar }}</h5>

                                @endforeach
                            @endisset

                    </div>
                    <div class="col-lg-3 col-6" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
                        <h4   class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{ __('home.About us') }}</h4>
                        <p style="{{ (App::getLocale()=='en')?'':'text-align:right' }}" >{{ (App::getLocale()=='en')?$Restaurants[0]->description:$Restaurants[0]->description_ar }}.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="{{ url('/') }}">
                                {{ (App::getLocale()=='en')?env('APP_NAME'):env('APP_NAME_AR') }}
                            </a>, {{ __('Restaurant.All Right') }} <a class="border-bottom" href="{{ url('/') }}">{{ (App::getLocale()=='en')?env('APP_NAME'):env('APP_NAME_AR') }}</a><br><br>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#">{{ __('Restaurant.Home') }}</a>
                                <a href="#Menu">{{ __('Restaurant.Menu') }}</a>
                                <a href="#service">{{ __('Restaurant.ServicesNav') }}</a>
                                <a href="#About">{{ __('Restaurant.About us') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Restaurants/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('Restaurants/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('Restaurants/js/main.js')}}"></script>
</body>

</html>
