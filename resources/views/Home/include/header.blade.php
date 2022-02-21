<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport"
  content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="robots" content="index, follow" />
  <title>@yield('site_title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="{{ asset('web_assets/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('web_assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('web_assets/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('web_assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('flag-icon-css/css/flag-icon.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/simple-line-icons/style.css')}}">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/meteocons/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <!-- Template Main CSS File -->
  <link href="{{ asset('web_assets/assets/css/style.css') }}" rel="stylesheet">

    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        height: 250px;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>

<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61fe6da2b9e4e21181bd9ab6/1fr4togtm';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:{{ $ContactUs[0]->email }}">{{ $ContactUs[0]->email }}</a>
        <i class="bi bi-phone"></i> <a href="tel:{{ $ContactUs[0]->phone }}">{{ $ContactUs[0]->phone }}</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="{{ $ContactUs[0]->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{ $ContactUs[0]->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $ContactUs[0]->insta }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{ $ContactUs[0]->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="https://api.whatsapp.com/send?phone={{ $ContactUs[0]->whatsapp }}" class="linkedin"><i class="bi bi-whatsapp"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}"><img src="{{ asset('uploads/about/'.$About[0]->logo_company) }}"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
          <li><a class="nav-link scrollto " href="#hero">{{ __('home.Home') }}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{ __('home.About us') }}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{ __('home.ServicesNav') }}</a></li>
          <li><a class="nav-link scrollto" href="#departments">{{ __('home.Departments') }}</a></li>
          <li><a class="nav-link scrollto" href="#partners">{{ __('home.PartnersNav') }}</a></li>

          <li><a class="nav-link scrollto" href="#gallery">{{ __('home.GalleryNav') }}</a></li>

          <li><a class="nav-link scrollto" href="#contact">{{ __('home.Contact') }}</a></li>

          <li class="nav-item dropdown">
            <a class="" href="#" >
                <span><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                        <li><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a></li>
                @endif
            @endforeach
            </ul>
          </li>

          <li class="nav-item dropdown">
            @if (Auth()->user())
                <a class="" href="#" >
                    <span><span class="fab fa-user"></span> {{ Auth()->user()->name }}</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul>
                    <li><a class="dropdown-item" href="{{ url('user/profile') }}"><span class="fab fa-user"></span> {{ __('home.profile') }} </a></li>
                    <li>
                        <form action="{{ url('logout') }}" method="POST">
                        @csrf
                            <button type="submit" class="dropdown-item" >
                                <span class="fab fa-logout"></span> {{ __('home.logout') }}
                            </button>
                        </form>
                    </li>

                </ul>
                @endif
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @if (!Auth()->user())
        <a href="{{ url('register') }}" class="appointment-btn scrollto">{{ __('home.Register') }}</a>
        <a href="{{ url('login') }}" class="appointment-btn scrollto">{{ __('home.Log In') }}</a>
      @endif
    </div>
  </header><!-- End Header -->

