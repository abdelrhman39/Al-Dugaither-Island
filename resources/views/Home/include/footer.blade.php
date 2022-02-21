

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background: {{ $bg_section[0]->section_footer }}!important">

    <div class="footer-top" style="background: {{ $bg_section[0]->section_footer }}!important">
      <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><img width="100%" height="100%" src="{{ asset('uploads/about/'.$About[0]->logo_company) }}"></h3>

          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{ __('home.Useful Links') }}</h4>
            <ul>
              <li><i class="bx bx-chevron-{{ (App::getLocale()=='en')?'right':'left' }}"></i> <a class="nav-link scrollto " href="{{ url('/') }}">{{ __('home.Home') }}</a></li>
              <li><i class="bx bx-chevron-{{ (App::getLocale()=='en')?'right':'left' }}"></i> <a class="nav-link scrollto " href="#about">{{ __('home.About us') }}</a></li>
              <li><i class="bx bx-chevron-{{ (App::getLocale()=='en')?'right':'left' }}"></i> <a class="nav-link scrollto " href="#services">{{ __('home.Services Amaleed') }}</a></li>
              <li><i class="bx bx-chevron-{{ (App::getLocale()=='en')?'right':'left' }}"></i> <a class="nav-link scrollto " href="#departments">{{ __('home.Departments') }}</a></li>
              <li><i class="bx bx-chevron-{{ (App::getLocale()=='en')?'right':'left' }}"></i> <a class="nav-link scrollto " href="#partners">{{ __('home.Partners') }}</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{ __('home.Our Services') }}</h4>
            <ul>
            @foreach ($Services as $Service)
              <li><i class="bx bx-chevron-{{ (App::getLocale()=='en')?'right':'left' }}"></i> <a>{{ (App::getLocale()=='en')?$Service->services_name:$Service->services_name_ar }}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>{{ __('home.About us') }}</h4>
            <p>{{ (App::getLocale()=='en')? $Header[0]->text_More:$Header[0]->text_More_ar }}</p>
            <h1 class="logo me-auto">
                <a href="{{ url('/') }}">
                    <img style="width:250px;border-radius: 10px;" src="{{ asset('web_assets/assets/img/vision.png') }}">
                </a>
            </h1>
        </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; {{ __('home.Copyright') }} <strong><span>{{ __('home.Al Dughaither Island') }}</span></strong>. {{ __('home.All Rights Reserved') }}
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{ $ContactUs[0]->twitter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ $ContactUs[0]->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $ContactUs[0]->insta }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone={{ $ContactUs[0]->whatsapp }}" target="_blank" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
        <a href="{{ $ContactUs[0]->linkedin }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('web_assets/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('web_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web_assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('web_assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('web_assets/assets/vendor/php-email-form/validate.js') }}"></script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('web_assets/assets/js/main.js') }}"></script>
<script>
      var swiper = new Swiper('.mySwiper', {
      slidesPerView: 2,
      freeMode: true,
      spaceBetween: 10,
      autoplay: {
        delay: 1500,
    },
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        925: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1124: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      }
    });
    </script>
</body>

</html>
