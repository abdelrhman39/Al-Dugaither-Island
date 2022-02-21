<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('site_title') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('uploads/Restaurants/'.$Restaurants[0]->logo)}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Restaurants/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Restaurants/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Restaurants/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Restaurants/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('flag-icon-css/css/flag-icon.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Restaurants/css/style.css') }}" rel="stylesheet">
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
<body style="overflow-x: hidden">

<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>{{ (App::getLocale()=='en')?$Restaurants[0]->name:$Restaurants[0]->name_ar }}</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="white-space: nowrap;">
                <div class="navbar-nav ms-auto py-0 pe-4" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
                    <a href="#" class="nav-item nav-link active">{{ __('Restaurant.Home') }}</a>
                    <a href="#About" class="nav-item nav-link">{{ __('Restaurant.About us') }}</a>
                    <a href="#service" class="nav-item nav-link">{{ __('Restaurant.ServicesNav') }}</a>
                    <a href="#Menu" class="nav-item nav-link">{{ __('Restaurant.Menu') }}</a>
                    <a href="#Gallery" class="nav-item nav-link">{{ __('Restaurant.GalleryNav') }}</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" >
                            <span><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                        </a>
                        <div class="dropdown-menu m-0">

                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <a href="#contactUs" class="nav-item nav-link">{{ __('Restaurant.Contact') }}</a>
                </div>



                <div class="nav-item dropdown">
                    @if (Auth()->user())
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" >
                        <span><span class="fab fa-user"></span> {{ Auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu m-0">


                        <a class="dropdown-item" href="{{ url('user/profile') }}"><span class="fab fa-user"></span> {{ __('home.profile') }}</a>
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item" >
                                <span class="fab fa-logout"></span> {{ __('home.logout') }}
                            </button>
                        </form>

                    </div>
                    @endif
                </div>



                {{-- <a href="" class="btn btn-primary py-2 px-4">Book A Table</a> --}}
                @if (!Auth()->user())
                    <a href="{{ url('register') }}" class="btn btn-primary m-1 appointment-btn scrollto">{{ __('home.Register') }}</a>
                    <a href="{{ url('login') }}" class="btn btn-primary appointment-btn scrollto">{{ __('home.Log In') }}</a>
                @endif
            </div>
        </nav>

        <div class="container-xxl py-3 bg-dark hero-header mb-5" dir="{{ (App::getLocale()=='en')?'':'rtl' }}" style="background:linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url({{ asset('uploads/Restaurants/'.$Restaurants[0]->main_img_bg) }});background-position: center center;background-repeat: no-repeat;background-size: cover;">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5" >
                    <div class="col-lg-6 text-center text-lg-start" style="{{ (App::getLocale()=='en')?'':'text-align: right !important;' }}" >
                        <h1 class="display-3 text-white animated slideInLeft">{{ __('Restaurant.Enjoy Our') }}<br><h1 class="display-3 text-white animated slideInLeft" style="color: #FEA116 !important;">{{ (App::getLocale()=='en')?$Restaurants[0]->name:$Restaurants[0]->name_ar }}</h1></h1>
                        <p class="text-white animated slideInLeft fa-lg mb-4 pb-2" style="line-height: 1.2em">{{ (App::getLocale()=='en')?$Restaurants[0]->description:$Restaurants[0]->description_ar }}</p>
                        <a href="#Service" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ __('home.Learn More') }}</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end ">
                        <img class="img-fluid rounded-circle" src="{{ asset('uploads/Restaurants/'.$Restaurants[0]->main_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
