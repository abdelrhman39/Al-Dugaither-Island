<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        {{ App::getLocale() == 'en'? $Fitness_Room_Header->fitness_room_name: $Fitness_Room_Header->fitness_room_name_ar }}
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/animate.css') }}">
    <link href="{{ asset('flag-icon-css/css/flag-icon.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/weather-icons/climacons.min.css') }}">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/simple-line-icons/style.css') }}">


    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('Fitness_Room/css/style.css') }}">


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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href=""><span
                    class="flaticon-lotus"></span>{{ App::getLocale() == 'en'? $Fitness_Room_Header->fitness_room_name: $Fitness_Room_Header->fitness_room_name_ar }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> {{ __('Fitness_Room.Menu') }}
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
                    <li class="nav-item active"><a href="#" class="nav-link">{{ __('home.Home') }}</a>
                    </li>
                    <li class="nav-item"><a href="#Levels" class="nav-link">{{ __('Fitness_Room.Levels') }}</a></li>
                    <li class="nav-item"><a href="#Service" class="nav-link">{{ __('home.ServicesNav') }}</a></li>
                    <li class="nav-item"><a href="#About"
                            class="nav-link">{{ __('home.About us') }}</a></li>
                    <li class="nav-item"><a href="#Stories" class="nav-link">{{ __('Fitness_Room.Successful Stories') }}</a></li>
                    <li class="nav-item"><a href="#contactUs"
                            class="nav-link">{{ __('home.Contact') }}</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item page-scroll" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        @if (Auth()->user())
                            <a class="nav-link dropdown-toggle"  href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <span><span class="fab fa-user"></span> {{ Auth()->user()->name }}</span>
                            </a>



                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="{{ url('user/profile') }}"><span class="fab fa-user"></span> {{ __('home.profile') }} </a>

                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" >
                                        <span class="fab fa-logout"></span> {{ __('home.logout') }}
                                    </button>
                                </form>
                            </div>


                        @endif
                    </li>

                </ul>
                @if (!Auth()->user())
                    <a href="{{ url('register') }}" class="btn btn-primary appointment-btn scrollto">{{ __('home.Register') }}</a>
                    <a href="{{ url('login') }}" class="btn btn-primary ml-1 appointment-btn scrollto">{{ __('home.Log In') }}</a>
                @endif
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight"
        style="background-image: url('{{ asset('uploads/fitness_room/' . $Fitness_Room_Header->image) }}');">
        <div class="overlay"></div>
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
                <div class="col-md-8 ftco-animate" style="{{ (App::getLocale()=='en')?'':'text-align: right!important;' }}">
                    <h1 class="typewrite mb-3" data-period="4000" data-type='[
                "{{ App::getLocale() == 'en' ? $Fitness_Room_Header->text_head_anim1 : $Fitness_Room_Header->text_head_anim1_ar }}",
                "{{ App::getLocale() == 'en' ? $Fitness_Room_Header->text_head_anim2 : $Fitness_Room_Header->text_head_anim2_ar }}",
                "{{ App::getLocale() == 'en' ? $Fitness_Room_Header->text_head_anim3 : $Fitness_Room_Header->text_head_anim3_ar }}"
                ]'>
                        <span class="wrap"></span>
                    </h1>
                    <h2 class="mb-5">
                        {{ App::getLocale() == 'en' ? $Fitness_Room_Header->text_more : $Fitness_Room_Header->text_more_ar }}
                    </h2>
                    <p><a href="#About" class="btn btn-primary p-3 px-4">{{ __('home.Get Started') }}</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro" id="About"
        style="background-image: url({{ asset('uploads/fitness_room/' . $Fitness_Room_Section2->image) }});">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <div class="heading-section ftco-animate">
                        <h2 class="mb-4">
                            {{ App::getLocale() == 'en' ? $Fitness_Room_Section2->text_head : $Fitness_Room_Section2->text_head_ar }}
                        </h2>
                    </div>
                    <p class="ftco-animate">
                        {{ App::getLocale() == 'en' ? $Fitness_Room_Section2->text_more : $Fitness_Room_Section2->text_more_ar }}.
                    </p>
                    <ul class="mt-5 do-list" >
                        <li class="ftco-animate"><a href="#"><span
                                    class="ion-ios-checkmark-circle mr-3"></span>{{ App::getLocale() == 'en' ? $Fitness_Room_Section2->serv1_text : $Fitness_Room_Section2->serv1_text_ar }}</a>
                        </li>
                        <li class="ftco-animate"><a href="#"><span
                                    class="ion-ios-checkmark-circle mr-3"></span>{{ App::getLocale() == 'en' ? $Fitness_Room_Section2->serv2_text : $Fitness_Room_Section2->serv2_text_ar }}</a>
                        </li>
                        <li class="ftco-animate"><a href="#"><span
                                    class="ion-ios-checkmark-circle mr-3"></span>{{ App::getLocale() == 'en' ? $Fitness_Room_Section2->serv3_text : $Fitness_Room_Section2->serv3_text_ar }}</a>
                        </li>
                        <li class="ftco-animate"><a href="#"><span
                                    class="ion-ios-checkmark-circle mr-3"></span>{{ App::getLocale() == 'en' ? $Fitness_Room_Section2->serv4_text : $Fitness_Room_Section2->serv4_text_ar }}</a>
                        </li>
                        <li class="ftco-animate"><a href="#"><span
                                    class="ion-ios-checkmark-circle mr-3"></span>{{ App::getLocale() == 'en' ? $Fitness_Room_Section2->serv5_text : $Fitness_Room_Section2->serv5_text_ar }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @if(count($Fi_Room_Services))

        <section class="ftco-section ftco-section-services" id="Service" style="background: {{ $bg_section[0]->section3 }}!important">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-12 heading-section ftco-animate text-center">
                        <h3 class="subheading">{{ __('home.ServicesNav') }}</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($Fi_Room_Services as $Service)

                        <div class="col-md-3"
                            style="border-radius: 10px;background: #fff; padding: 20px;  box-shadow: 0px 0px 15px -10px;">
                            <div class="services ftco-animate">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="{{ $Service->icon }}"></span>
                                </div>
                                <div class="text mt-4">
                                    <h3>{{ App::getLocale() == 'en' ? $Service->text_head : $Service->text_head_ar }}</h3>
                                    <p>{{ App::getLocale() == 'en' ? $Service->text_desc : $Service->text_desc_ar }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

    @endif

    @if(count($Fitness_Room_Levels))

        <section class="ftco-section" id="Levels" style="background: {{ $bg_section[0]->section4 }}!important">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-12 heading-section ftco-animate text-center">
                        <h3 class="subheading">{{ __('Fitness_Room.Levels') }}</h3>
                        <h2 class="mb-1">{{ __('Fitness_Room.Choose Your Level') }}</h2>
                    </div>
                </div>
                <div class="row no-gutters">

                    @foreach ($Fitness_Room_Levels as $Level)

                        <div class="col-md-6 col-lg-4">
                            <div class="package-program ftco-animate">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('uploads/fitness_room/' . $Level->image) }});">
                                    <div class="text p-5 text-center">
                                        <h3>{{ App::getLocale() == 'en' ? $Level->text_head : $Level->text_head_ar }}</h3>
                                        <p>{{ App::getLocale() == 'en' ? $Level->text_desc : $Level->text_desc_ar }}.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

    @endif

    @if(count($Fitness_Room_Stories))

        <section class="ftco-section testimony-section" id="Stories"
            style="background:linear-gradient(45deg, #d291bc 0%, rgba(255, 255, 255, 0) 100%)" style="background: {{ $bg_section[0]->section5 }}!important">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h3 class="subheading">{{ __('Fitness_Room.Testimony') }}</h3>
                        <h2 class="mb-1">{{ __('Fitness_Room.Successful Stories') }}</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">

                            @foreach ($Fitness_Room_Stories as $Stories)

                                <div class="item">
                                    <div class="testimony-wrap p-4 pb-5">
                                        <div class="text">
                                            <div class="line pl-5">
                                                <p class="mb-4 pb-1">
                                                    {{ App::getLocale() == 'en' ? $Stories->text_view : $Stories->text_view_ar }}.
                                                </p>
                                                <span class="quote d-flex align-items-center justify-content-center">
                                                    <i class="icon-quote-left"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="user-img"
                                                    style="background-image: url({{ asset('uploads/fitness_room/' . $Stories->user_img) }})">
                                                </div>
                                                <div class="ml-4">
                                                    <p class="name">
                                                        {{ App::getLocale() == 'en' ? $Stories->user_name : $Stories->user_name_ar }}
                                                    </p>
                                                    <span class="position text-white ">{{ __('Fitness_Room.Customer') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif


    @if(count($Fitness_Room_Images) > 0)

        <section class="ftco-gallery ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h3 class="subheading">{{ __('home.Gallery') }}</h3>
                        <h2 class="mb-1">{{ __('Fitness_Room.See the latest photos') }}</h2>
                    </div>
                </div>
                <div class="row">

                @foreach ($Fitness_Room_Images as $img)

                    <div class="col-md-3 ftco-animate">
                        <a href="{{ asset('uploads/fitness_room/'.$img->image) }}" class="gallery image-popup img d-flex align-items-center"
                            style="background-image: url({{ asset('uploads/fitness_room/'.$img->image) }});">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-instagram"></span>
                            </div>
                        </a>
                    </div>

                @endforeach
                </div>
            </div>
        </section>

    @endif



    <footer class="ftco-footer ftco-section img" style="background: {{ $bg_section[0]->section_footer }}!important">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5 ftco-animate">
                    <div class="ftco-footer-widget mb-4">
                        <h1 class="logo">{{ App::getLocale() == 'en'? $Fitness_Room_Header->fitness_room_name: $Fitness_Room_Header->fitness_room_name_ar }}</h1>
                    </div>
                </div>
                <div class="col-lg col-md-6 mb-5 mb-md-5 ftco-animate">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="location">{{ App::getLocale() == 'en'? $Fitness_Room_ContactUs->site_description: $Fitness_Room_ContactUs->site_description_ar }}</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="{{ $Fitness_Room_ContactUs->twitter }}"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="{{ $Fitness_Room_ContactUs->facebook }}"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="{{ $Fitness_Room_ContactUs->instagram }}"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script> {{ __('Fitness_Room.All rights reserved') }} <i
                            class="icon-heart" aria-hidden="true"></i> <a href="{{ url('/') }}"
                            target="_blank">{{ App::getLocale() == 'en'? env('APP_NAME') : env('APP_NAME_AR')  }}</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('Fitness_Room/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/popper.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/aos.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('Fitness_Room/js/google-map.js') }}"></script>
    <script src="{{ asset('Fitness_Room/js/main.js') }}"></script>

</body>

</html>
