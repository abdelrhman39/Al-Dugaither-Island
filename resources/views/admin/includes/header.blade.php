<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>{{ (App::getLocale()=='en')? env('APP_NAME'):env('APP_NAME_AR') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('web_assets/assets/img/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web_assets/assets/img/logo.png') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <?php $lang = (App::getLocale()=="ar")?"-rtl":""; ?>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <link href="{{ asset('flag-icon-css/css/flag-icon.css') }}" rel="stylesheet">

    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>



    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/js/gallery/photo-swipe/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/vendors/js/gallery/photo-swipe/default-skin/default-skin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/pages/gallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css'.$lang.'/plugins/forms/wizard.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/all.min.css') }}">

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- END Custom CSS-->

</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
    <!-- fixed-top-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                            <img class="brand-logo rounded " alt="modern admin logo"
                                src="{{ asset('web_assets/assets/img/logo.png') }}">
                            <h3 class="brand-text">{{ (App::getLocale()=='en')?substr(env('APP_NAME'),0,15).'..':env('APP_NAME_AR') }}</h3>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                                class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>

                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                    class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1">{{ __('admin.Hello') }},
                                    <span
                                        class="user-name text-bold-700">{{ Auth()->guard('admin')->user()->name }}</span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src=" @if (Auth()->guard('admin')->user()->profile_photo_path)
                                    {{ Auth()->guard('admin')->user()->profile_photo_path }}
                                @else {{ asset('admin/images/portrait/small/avatar-s-19.png') }}@endif"
                                    alt="{{ Auth()->guard('admin')->user()->name }}"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                @if (Auth()->guard('admin')->user()->is_super == 1)

                                    <a class="dropdown-item" data-toggle="modal"
                                    data-target="#Edit_And_Update_Super_Admin_profile{{ Auth()->guard('admin')->user()->id }}" href="#">
                                        <i class="ft-user"></i>
                                        {{ __('admin.Edit Profile') }}
                                    </a>

                                    <div class="dropdown-divider">
                                    </div>

                                @endif

                                <a class="dropdown-item"
                                    href="{{ url('admin/logout') }}">
                                    <i class="ft-power"></i>
                                     {{ __('admin.Logout') }}
                                </a>
                            </div>
                        </li>



                        <li class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span><span
                                        class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                                    {{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item page-scroll"
                                            href="{{ route('lang.switch', $lang) }}"><span
                                                class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                                            {{ $language['display'] }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </nav>


    @if (Auth()->guard('admin')->user()->is_super == 1)

    {{-- Start Modal Edit --}}
    <div class="modal  fade text-left"
    id="Edit_And_Update_Super_Admin_profile{{ Auth()->guard('admin')->user()->id }}" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel35"
    aria-hidden="true">
    <div class="modal-xl modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"
                    id="myModalLabel35"> {{ __('admin.Edit') }}
                    {{ Auth()->guard('admin')->user()->name }}
                </h3>
                <button type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.Edit_And_Update_Super_Admin_profile', Auth()->guard('admin')->user()->id) }}" method="POST"
                enctype="multipart/form-data" class="form-horizontal" novalidate>
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_Admin" value="{{ Auth()->guard('admin')->user()->id }}" />

                    <div class="row" dir="{{ (App::getLocale()=='en')?'':'rtl' }}" style="{{ (App::getLocale()=='en')?'':'text-align: right;' }}">
                        <div class="col-md-6 form-group">
                            <h5>{{ __('home.Name') }}
                                <span class="">*</span>
                            </h5>
                            <div class="controls">
                                <input type="text" value="{{ Auth()->guard('admin')->user()->name }}" name="Admin_name" required class="form-control">
                            </div>
                        </div>


                        <div class="col-md-6 form-group">
                            <h5>{{ __('home.Email') }}
                                <span class="">*</span>
                            </h5>
                            <div class="controls">
                                <input type="email" value="{{ Auth()->guard('admin')->user()->email }}" name="Admin_email" required class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                            <h5>{{ __('home.Password') }}
                                <span class="">*</span>
                            </h5>
                            <div class="controls">
                                <input type="password" value="{{ Auth()->guard('admin')->user()->password }}" name="Admin_password" required class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">{{ __('admin.Update') }} <i
                        class="la la-thumbs-o-up position-right"></i></button>
                    <button type="reset" class="btn btn-danger">{{ __('admin.Reset') }} <i
                        class="la la-refresh position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Modal Edit --}}

@endif
