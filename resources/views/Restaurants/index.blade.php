@extends('Restaurants.layouts.siteRestaurant')
@section('site_title', (App::getLocale()=='en')?$Restaurants[0]->name:$Restaurants[0]->name_ar )
@section('content')


<!-- Service Start -->
@isset($Restaurant_Services)

    <div class="container-xxl py-5" id="service" style="background: {{ $bg_section[0]->section2 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{ __('Restaurant.ServicesNav') }}</h5>
            </div>
            <div class="row g-4">
                <?php $i=0; ?>
                @isset($Restaurant_Services)
                    @foreach ($Restaurant_Services as $Service )
                        <?php $i++; ?>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.{{ $i }}s">
                            <div class="service-item rounded pt-3" style="{{-- border: 1px solid #fea116; --}}">
                                <div class="p-4">
                                    <i class="fa-3x {{ $Service->icon }} text-primary mb-4"></i>
                                    <h5>{{ (App::getLocale()=='en')?$Service->services_name:$Service->services_name_ar }}</h5>
                                    <p>{{ (App::getLocale()=='en')?$Service->services_desc:$Service->services_desc_ar }}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endisset

            </div>
        </div>
    </div>

@endisset
<!-- Service End -->

<!-- About Start -->
@isset($RestaurantsImages)

    <div class="container-xxl py-5" id="About" style="background: {{ $bg_section[0]->section3 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            @if (count($RestaurantsImages) >= 1)<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('uploads/Restaurants/'.$RestaurantsImages[0]->image) }}">@endif
                        </div>
                        <div class="col-6 text-start">
                            @if (count($RestaurantsImages) >= 2)<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="@if ($RestaurantsImages[1]->image) {{ asset('uploads/Restaurants/'.$RestaurantsImages[1]->image) }} @endif" style="margin-top: 25%;">@endif
                        </div>
                        <div class="col-6 text-end">
                            @if (count($RestaurantsImages) >= 3)<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="@if ($RestaurantsImages[2]->image) {{ asset('uploads/Restaurants/'.$RestaurantsImages[2]->image) }} @endif">@endif
                        </div>
                        <div class="col-6 text-end">
                            @if (count($RestaurantsImages) >= 4)<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="@if ($RestaurantsImages[3]->image) {{ asset('uploads/Restaurants/'.$RestaurantsImages[3]->image) }} @endif"> @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">{{ __('Restaurant.About us') }}</h5>
                    <h1 class="mb-4"> {{ __('Restaurant.Welcome to') }}  <i class="fa fa-utensils text-primary me-2"></i> {{ (App::getLocale()=='en')?$Restaurants[0]->name:$Restaurants[0]->name_ar }}</h1>
                    <p class="mb-4">{{ (App::getLocale()=='en')?$Restaurants[0]->description:$Restaurants[0]->description_ar }}.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ $Restaurants[0]->experience }}</h1>
                                <div class="ps-4">
                                    <p class="mb-0">{{ __('Restaurant.Years of') }}</p>
                                    <h6 class="text-uppercase mb-0">{{ __('Restaurant.EXPERIENCE') }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{ count($Restaurant_Chefs) }}</h1>
                                <div class="ps-4">
                                    <p class="mb-0">{{ __('Restaurant.Popular') }}</p>
                                    <h6 class="text-uppercase mb-0">{{ __('Restaurant.MASTER CHEFS') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">{{ __('home.Learn More') }}</a>
                </div>
            </div>
        </div>
    </div>

@endisset
<!-- About End -->

<!-- Products Start -->
@isset($RestaurantsProducts)

    <div class="container-xxl " id="Products" style="background: {{ $bg_section[0]->section4 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{ __('Restaurant.products') }}</h5>
            </div>
            <div class="row g-4">
                <?php $b=0; ?>
                @isset($RestaurantsProducts)
                    @foreach ($RestaurantsProducts as $Product )
                        <?php $b++; ?>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.{{ $b }}s">
                            <div class="service-item rounded pt-3 position-relative " style="{{-- border: 1px solid #fea116; --}}">
                                <div class="container-fluid">
                                    <img class="img-fluid w-100" src="{{ asset('uploads/Products/'.$Product->image) }}"/>
                                </div>
                                <div class="p-4">
                                    <i class="fa-3x {{ $Product->icon }} text-primary mb-4"></i>
                                    <h5>{{ (App::getLocale()=='en')?$Product->product_name:$Product->product_name_ar }}</h5>
                                    <p>{{ (App::getLocale()=='en')?$Product->product_description:$Product->product_description_ar }}</p>
                                </div>
                                <span class="position-absolute bg-primary text-white p-2"
                                style="top: 0;right:0;border-radius: 10px 0px 10px 1px;border:2px solid #fff">{{ $Product->price }} $</span>
                            </div>
                        </div>

                    @endforeach
                @endisset

            </div>
        </div>
    </div>

@endisset
<!-- Products End -->


<!-- Menu Start -->
@isset($Category_Restaurant_Menu)

    <div class="container-xxl py-5" id="Menu" style="background: {{ $bg_section[0]->section5 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary  text-primary fw-normal">{{ __('Restaurant.Menu') }}</h5>
                <h1 class="mb-5">{{ __('Restaurant.Most Popular Items') }}</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <?php $x=0; ?>
                    @foreach ($Category_Restaurant_Menu as $catMenu )
                    <?php $x++; ?>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-{{ (App::getLocale()=='en')?'start':'end' }} mx-3 ms-0 pb-3 @if($x == 1) active @endif" data-bs-toggle="pill" href="#tab-{{ $x }}">
                                <i class="{{ $catMenu->icon }} fa-2x text-primary"></i>
                                <div style="{{ (App::getLocale()=='en')?'padding-left:5px':'padding-right:5px' }}">
                                    <small class="text-body" style="{{ (App::getLocale()=='en')?'padding-left:10px;':'padding-right:10px;text-align: right;' }}">{{ __('Restaurant.Popular') }}</small>
                                    <h6 class="mt-n1 mb-0" >{{ (App::getLocale()=='en')?$catMenu->name:$catMenu->name_ar }}</h6>
                                </div>
                            </a>
                        </li>

                    @endforeach



                </ul>
                <div class="tab-content">
                    <?php $a=0; ?>
                    @foreach ($Category_Restaurant_Menu as $catMenu )
                        <?php $a++; ?>

                            <div id="tab-{{ $a }}" class="tab-pane fade show p-0 @if($a == 1) active @endif">
                                <div class="row g-4">

                                    @foreach ($Restaurant_Menu as $Menu)
                                        @if ($catMenu->id == $Menu->menu_cat_id)

                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('uploads/Menu/'.$Menu->image) }}" alt="" style="width: 80px;">
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span style="{{ (App::getLocale()=='en')?'padding-left:10px;':'padding-right:10px;text-align: right;' }}">{{ (App::getLocale()=='en')?$Menu->product_name:$Menu->product_name_ar }}</span>
                                                            <span class="text-primary">${{ $Menu->price }}</span>
                                                        </h5>
                                                        <small style="{{ (App::getLocale()=='en')?'padding-left:10px;':'padding-right:10px;text-align: right;' }}" class="fst-italic">{{ (App::getLocale()=='en')?$Menu->description:$Menu->description_ar }}</small>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif

                                    @endforeach

                                </div>
                            </div>

                    @endforeach



                </div>
            </div>
        </div>
    </div>

@endisset
<!-- Menu End -->




<!-- Chefs Start -->
@isset($Restaurant_Chefs)

    <div class="container-xxl pt-5 pb-3" style="background: {{ $bg_section[0]->section6 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{ __('Restaurant.Team Members') }}</h5>
                <h1 class="mb-5">{{ __('Restaurant.Our Master Chefs') }}</h1>
            </div>
            <div class="row g-4">

                <?php $c=0; ?>
                @foreach ($Restaurant_Chefs as $Chef)
                <?php $c++; ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $c }}s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('uploads/Chefs/'.$Chef->image) }}" alt="{{ (App::getLocale()=='en')?$Chef->chef_name:$Chef->chef_name_ar  }}">
                            </div>
                            <h5 class="mb-0">{{ (App::getLocale()=='en')?$Chef->chef_name:$Chef->chef_name_ar  }}</h5>
                            <small>{{ (App::getLocale()=='en')?$Chef->Specialization:$Chef->Specialization_ar  }}</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="{{ $Chef->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="{{ $Chef->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="{{ $Chef->insta }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endisset
<!-- Chefs End -->


<!-- Images Start -->
@isset($RestaurantsImages)

    <div class="container-xxl py-5 wow fadeInUp" id="Gallery" data-wow-delay="0.1s" style="background: {{ $bg_section[0]->section7 }}!important">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{ __('Restaurant.Gallery') }}</h5>
                <h1 class="mb-5">{{ __('Restaurant.Gallery') }}</h1>
            </div>

            <div class="owl-carousel testimonial-carousel">

                @foreach ($RestaurantsImages as $img)

                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <img src="{{ asset('uploads/Restaurants/'.$img->image) }}" width="100%" height="100%" />
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endisset
<!-- Images End -->



<!-- Contact Us Start -->
<div class="container-xxl py-5" id="contactUs" style="background: {{ $bg_section[0]->section8 }}!important">
    <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{ __('Restaurant.Contact') }}</h5>
            <h1 class="mb-5">{{ __('Restaurant.Contact For Any Query') }}</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">{{ __('Restaurant.email') }}</h5>
                        <p><i class="fa fa-envelope text-primary me-2" style="{{ (App::getLocale()=='en')?'':'padding-left: 10px;' }}"></i>{{ $Restaurants[0]->email }}</p>
                    </div>
                    <div class="col-md-12 py-5">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">{{ __('Restaurant.phone') }}</h5>
                        <p><i class="fa fa-phone text-primary me-2" style="{{ (App::getLocale()=='en')?'':'padding-left: 10px;' }}"></i>{{ $Restaurants[0]->phone }}</p>
                    </div>
                    <div class="col-md-12 ">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">{{ __('Restaurant.whatsapp') }}</h5>
                        <p><i class="fab fa-whatsapp text-primary me-2" style="{{ (App::getLocale()=='en')?'':'padding-left: 10px;' }}"></i>{{ $Restaurants[0]->whatsapp }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="{{ route('send_mail') }}" method="POST">
                        @csrf
                        <input type="hidden" name="email_send" value="{{ $Restaurants[0]->email }}"/>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('home.Your Name') }}">
                                    <label style="right:{{ (App::getLocale()=='en')?'':'0' }}" for="name">{{ __('home.Your Name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('home.Email') }}">
                                    <label style="right:{{ (App::getLocale()=='en')?'':'0' }}" for="email">{{ __('home.Email') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('home.Subject') }}">
                                    <label style="right:{{ (App::getLocale()=='en')?'':'0' }}" for="subject">{{ __('home.Subject') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="{{ __('home.Message') }}" name="message" id="message" style="height: 150px"></textarea>
                                    <label style="right:{{ (App::getLocale()=='en')?'':'0' }}" for="message">{{ __('home.Message') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">{{ __('home.Send Message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection
