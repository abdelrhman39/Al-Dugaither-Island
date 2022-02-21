<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>{{ App::getLocale() == 'en'? env('APP_NAME').' Parking': env('APP_NAME_AR').'المواقف' }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="{{ asset('Parking/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('Parking/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('Parking/css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('Parking/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('Parking/css/styles.css') }}" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
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
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Revo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="#"><i class="fas fa-2x fa-parking"></i></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">{{ __('home.Home') }} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#registration">{{ __('Parking.Parking Reservation') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">{{ __('home.ServicesNav') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#Video">{{ __('Parking.Video') }}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                            <i class="bi bi-chevron-down"></i>
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
                            <a class="nav-link dropdown-toggle" href="#" >
                                <span><span class="fab fa-user"></span> {{ Auth()->user()->name }}</span>
                                <i class="bi bi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="{{ url('user/profile') }}"><span class="fab fa-user"></span> {{ __('home.profile') }} </a>
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
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="{{ $Parking_About_Us->facebook }}">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="{{ $Parking_About_Us->twitter }}">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="{{ $Parking_About_Us->insta }}">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">

                                @foreach ($Parking as $Park)

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-7">
                                                <div class="image-container">
                                                    <img class="img-fluid" src="{{ asset('uploads/Parking/'.$Park->parking_img) }}" alt="{{ App::getLocale() == 'en'? $Park->parking_name: $Park->parking_name_ar }}">
                                                </div> <!-- end of image-container -->
                                            </div> <!-- end of col -->
                                            <div class="col-lg-6 col-xl-5">
                                                <div class="text-container">
                                                    <h1 class="h1-large">{{ App::getLocale() == 'en'? $Park->parking_name: $Park->parking_name_ar }}</h1>
                                                    <p class="p-large">{{ App::getLocale() == 'en'? $Park->parking_desc: $Park->parking_desc_ar }}</p>
                                                    <a class="btn-solid-lg page-scroll" href="#registration">{{ __('Parking.Parking Reservation') }}</a>
                                                    <a class="btn-outline-lg page-scroll" href="#features">{{ __('Parking.Our services') }}</a>
                                                </div> <!-- end of text-container -->
                                            </div> <!-- end of col -->
                                        </div> <!-- end of row -->
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                @endforeach



                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Registration -->
    <div id="registration" class="form-1 bg-dark-blue" style="background: {{ $bg_section[0]->section2 }}!important">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>{{ __('Parking.Parking Reservation Services') }}</h2>
                        <p>{{ App::getLocale() == 'en'? $Parking_About_Us->about_desc: $Parking_About_Us->about_desc_ar }}</p>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <form action="{{ route('order_Parking') }}" method="POST" id="registrationForm">
                        @csrf
                        <div class="form-group">
                            @if (auth()->user()) <input type="hidden" value="{{ auth()->user()->name }}" name="name" class="form-control-input" id="rname" required> @endif
                            <label class="label-control" for="rname">{{ __('home.Name') }}</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" required class="form-control-input" id="roccupation" required>
                            <label class="label-control" for="roccupation">{{ __('home.Phone') }}</label>
                        </div>
                        <div class="form-group">
                            @if (auth()->user())<input type="hidden" value="{{ auth()->user()->email }}" name="email" class="form-control-input" id="remail" required> @endif
                            <label class="label-control" for="remail">{{ __('home.Email') }}</label>
                        </div>

                        <div class="form-group">
                            <textarea name="Description_Order" class="form-control-input" id="desc" ></textarea>
                            <label class="label-control" for="desc">{{ __('Parking.Description Order') }}</label>
                        </div>

                        <div class="form-group">
                            @if (auth()->user())
                                <button type="submit" class="form-control-submit-button">{{ __('Parking.send order') }}</button>
                            @else
                                <a style="line-height: 250%;" href="{{ url('register') }}" class="btn btn-info form-control-submit-button">{{ __('Parking.Sign up first') }}</a>
                            @endif
                        </div>
                    </form>
                    <!-- end of registration form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->


    @if(count($Parking_Services) > 0)
    <!-- Features -->
    <div id="features" class="cards-1 bg-dark-blue" style="background: {{ $bg_section[0]->section3 }}!important">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">{{ __('Restaurant.ServicesNav') }}</h2>
                    <p class="p-heading">========================</p>
                </div> <!-- end of div -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">


                        @foreach ($Parking_Services as $Service )

                            <!-- Card -->
                            <div class="card">
                                <div class="card-image">
                                    <i class="{{ $Service->icon }} fa-4x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ App::getLocale() == 'en'? $Service->serv_name: $Service->serv_name_ar }}</h5>
                                    <p>{{ App::getLocale() == 'en'? $Service->serv_desc: $Service->serv_desc_ar }}</p>
                                </div>
                            </div>
                            <!-- end of card -->

                        @endforeach


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->
    @endif



    <!-- Video -->
    <div class="basic-2 bg-dark-blue" id="Video" style="background: {{ $bg_section[0]->section4 }}!important">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">{{ __('Parking.Parking video') }}</h2>
                    <p class="p-heading">===============</p>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="{{ $Parking_About_Us->video }}" data-effect="fadeIn">
                                <img class="img-fluid" src="{{ asset('uploads/Parking/'.$Parking_About_Us->image_video) }}" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->


    <!-- Footer -->
    <div class="footer" style="background: {{ $bg_section[0]->section_footer }}!important">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first" style="{{ (App::getLocale()=='en')?'':'text-align: right;' }}">
                        <h6>{{ __('home.About us') }}</h6>
                        <p class="p-small">{{ App::getLocale() == 'en'? $Parking_About_Us->about_desc: $Parking_About_Us->about_desc_ar }}</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second" style="{{ (App::getLocale()=='en')?'':'text-align: right;' }}">
                        <h6>{{ __('Restaurant.links') }}</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li> <a href="/">{{ App::getLocale() == 'en'? env('APP_NAME'): env('APP_NAME_AR') }}</a>
                                <a class="page-scroll" href="#header">{{ __('home.Home') }}</a>
                            </li>
                                <li><a class="page-scroll" href="#registration">{{ __('Parking.Parking Reservation') }}</a></li>
                                <li><a class="page-scroll" href="#features">{{ __('home.ServicesNav') }}</a></li>
                            </li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="{{ $Parking_About_Us->facebook }}">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="{{ $Parking_About_Us->twitter }}">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="{{ $Parking_About_Us->email }}">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-phone fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="{{ $Parking_About_Us->insta }}">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">{{ __('Parking.We would love to hear from you') }} <a href="mailto:{{ $Parking_About_Us->email }}"><strong>{{ $Parking_About_Us->email }}</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">{{ __('Parking.Copyright ©') }} <a href="/">{{ App::getLocale() == 'en'? env('APP_NAME'): env('APP_NAME_AR') }}</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{ asset('Parking/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('Parking/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('Parking/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('Parking/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('Parking/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('Parking/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>
