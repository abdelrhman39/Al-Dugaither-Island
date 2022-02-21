@extends('layouts.siteHome')
@section('site_title', (App::getLocale()=='en')? env('APP_NAME'):env('APP_NAME_AR'))


@section('content')
<style>
    .layout{
        background-color: #0099cc6c;
        width: 100%;
        height: 100vh;
        position: absolute;
    }
    video.fullscreen {
    position: absolute;
    z-index: 0;
    object-fit: cover;
    width:100%;
    height:100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }


</style>


<!-- ======= Hero Section ======= -->
<section id="hero" class="section d-flex align-items-center" style="background: url('{{ asset('web_assets/assets/img/hero-bg.jpg') }}')  center;width: 100%;height: 100vh;background-rebet:no-rebet;background-repeat: no-repeat;background-size: cover;">
    <video class="fullscreen" src="{{ $Header[0]->vedio }}" playsinline autoplay muted loop>
    </video>
    <div class="layout"></div>
    <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
      <h1>{{ __('home.WELCOME TO') }}  <span class="text-dark
        ">{{ (App::getLocale()=='en')? $Header[0]->welcome:$Header[0]->welcome_ar }}</span></h1>
      <h2>{{ (App::getLocale()=='en')? $Header[0]->text_More:$Header[0]->text_More_ar }}.</h2>
      <a href="#about" class="btn-get-started scrollto border-light ">{{ __('home.Get Started') }}</a>
    </div>
  </section><!-- End Hero -->


  <main id="main" >

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us" dir="{{ (App::getLocale()=='en')?'':'rtl' }}" style="background: {{ $bg_section[0]->section2 }}!important">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>{{ (App::getLocale()=='en')?$Question[0]->answer:$Question[0]->answer_ar }} {{ (App::getLocale()=='en')? $Header[0]->welcome:$Header[0]->welcome_ar }}?</h3>
              <p>{{ (App::getLocale()=='en')?$Question[0]->text_under_question:$Question[0]->text_under_question_ar }}</p>
              <div class="text-center">
                <a href="#" class="more-btn">{{ __('home.Learn More') }} <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="far fa-thumbs-up"></i>
                    <h4>{{ (App::getLocale()=='en')?$Question[0]->serv1_head:$Question[0]->serv1_head_ar }}</h4>
                    <p>{{ (App::getLocale()=='en')?$Question[0]->serv1_text:$Question[0]->serv1_text_ar }}</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="far fa-thumbs-up"></i>
                    <h4>{{ (App::getLocale()=='en')?$Question[0]->serv2_head:$Question[0]->serv2_head_ar }}</h4>
                    <p>{{ (App::getLocale()=='en')?$Question[0]->serv2_text:$Question[0]->serv2_text_ar }}</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="far fa-thumbs-up"></i>
                    <h4>{{ (App::getLocale()=='en')?$Question[0]->serv3_head:$Question[0]->serv3_head_ar }}</h4>
                    <p>{{ (App::getLocale()=='en')?$Question[0]->serv3_text:$Question[0]->serv3_text_ar }}</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


      <!-- ======= About Section ======= -->
      <section id="about" class="about" style="background: {{ $bg_section[0]->section3 }}!important">
        <div class="container-fluid">

          <div class="row">
            <div style="background: url({{ asset('uploads/about/'.$About[0]->image) }}) center center no-repeat;background-size: cover;min-height: 500px;" class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch position-relative">
              <a href="{{ $About[0]->vedio_link }}" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
              <h3>{{ (App::getLocale()=='en')?$About[0]->text_head:$About[0]->text_head_ar }}</h3>
              <p>{{ (App::getLocale()=='en')?$About[0]->text_more:$About[0]->text_more_ar }}.</p>

              <div class="icon-box">
                <div class="icon" style="{{ (App::getLocale()=='en')?'':'float:right!important' }}"><i class="fas fa-2x fa-angle-double-{{ (App::getLocale()=='en')?'right':'left' }}"></i></div>
                <h4 class="title">{{ (App::getLocale()=='en')?$About[0]->serv1_head:$About[0]->serv1_head_ar }}</h4>
                <p class="description" style="{{ (App::getLocale()=='en')?'':'margin-right: 85px!important' }}">{{ (App::getLocale()=='en')?$About[0]->serv1_text:$About[0]->serv1_text_ar }}</p>
              </div>

              <div class="icon-box">
                <div class="icon" style="{{ (App::getLocale()=='en')?'':'float:right!important' }}"><i class="fas fa-2x fa-angle-double-{{ (App::getLocale()=='en')?'right':'left' }}"></i></div>
                <h4 class="title">{{ (App::getLocale()=='en')?$About[0]->serv2_head:$About[0]->serv2_head_ar }}</h4>
                <p class="description" style="{{ (App::getLocale()=='en')?'':'margin-right: 85px!important' }}">{{ (App::getLocale()=='en')?$About[0]->serv2_text:$About[0]->serv2_text_ar }}</p>
              </div>

              <div class="icon-box">
                <div class="icon" style="{{ (App::getLocale()=='en')?'':'float:right!important' }}"><i class="fas fa-2x fa-angle-double-{{ (App::getLocale()=='en')?'right':'left' }}"></i></div>
                <h4 class="title">{{ (App::getLocale()=='en')?$About[0]->serv3_head:$About[0]->serv3_head_ar }}</h4>
                <p class="description" style="{{ (App::getLocale()=='en')?'':'margin-right: 85px!important' }}">{{ (App::getLocale()=='en')?$About[0]->serv3_text:$About[0]->serv3_text_ar }}</p>
              </div>

            </div>
          </div>

        </div>
      </section><!-- End About Section -->



    <!-- ======= Services Section ======= -->
      <section id="services" class="services counts" style="background: {{ $bg_section[0]->section4 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">

          <div class="section-title">
            <h2>{{ __('home.Services Al-Dugaither Island') }}</h2>
          </div>

          <div class="row">

            @foreach ($Services as $Service)

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="{{  $Service->icon  }}"></i></div>
                        <h4><a href="">{{ (App::getLocale()=='en')?$Service->services_name:$Service->services_name_ar }}</a></h4>
                        <p>{{ (App::getLocale()=='en')?$Service->services_desc:$Service->services_desc_ar }}</p>
                    </div>
                </div>

            @endforeach

          </div>

        </div>
      </section><!-- End Services Section -->


      <!-- ======= Departments Section ======= -->
      <section id="departments" class="departments" style="background: {{ $bg_section[0]->section5 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">

          <div class="section-title">
            <h2>{{ __('home.Departments') }}</h2>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">

                <?php $i=0; ?>
                @foreach ($Departments as $Depart )
                    <?php $i++; ?>
                    <li class="nav-item">
                        <a style="{{ (App::getLocale()=='en')?'':'border-left: 2px solid #ebf1f6!important' }}" class="nav-link @if($i==1) active show @endif" data-bs-toggle="tab" href="#tab-{{ $Depart->id }}">{{ (App::getLocale()=='en')?$Depart->department:$Depart->department_ar }}</a>
                    </li>

                @endforeach



              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">

                <?php $x=0; ?>
                @foreach ($Departments as $Depart )
                    <?php $x++; ?>
                    <div class="tab-pane @if($x==1) active show @endif" id="tab-{{ $Depart->id }}">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>{{ (App::getLocale()=='en')?$Depart->department:$Depart->department_ar }}</h3>
                            <p>{{ (App::getLocale()=='en')?$Depart->desc_department:$Depart->desc_department_ar }}</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                            <a href="{{ $Depart->link }}"><img src="{{ asset('uploads/department/'.$Depart->image) }}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>

                @endforeach


              </div>
            </div>
          </div>

        </div>
      </section><!-- End Departments Section -->


      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section-bg" style="background: {{ $bg_section[0]->section6 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">

          <div class="section-title">
            <h2>{{ __('home.investment opportunitiesAl-Dugaither Island') }}</h2>
          </div>

          <div class="faq-list">
            <ul>
                @foreach ($ProposalsAmaleed as $Proposal)
                    <li data-aos="fade-up" class="p-5">
                        <i class="bx bx-help-circle icon-help" style="{{ (App::getLocale()=='en')?'':'right: 93% !important' }}" ></i> <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target="#faq-list-{{ $Proposal->id }}">{{ (App::getLocale()=='en')?$Proposal->proposal:$Proposal->proposal_ar }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-{{ $Proposal->id }}" class="collapse collapsed" data-bs-parent=".faq-list">
                            <p>
                                {{ (App::getLocale()=='en')?$Proposal->desc_proposals:$Proposal->desc_proposals_ar }}
                            </p>
                        </div>
                    </li>

                @endforeach

            </ul>
          </div>

        </div>
      </section><!-- End Frequently Asked Questions Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="partners" class="partners" style="background: {{ $bg_section[0]->section7 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="section-title">
              <h2>{{ __('home.Partners') }}</h2>
            </div>
        </div>
        <div class=" mySwiper">
            <div class="swiper-wrapper">
                @foreach ($Partners as $Partner)
                    <div class="swiper-slide"><img style="" src="{{ asset('uploads/PartnersHome/'.$Partner->logo) }}" /></div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>

      </section><!-- End Testimonials Section -->

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery" style="background: {{ $bg_section[0]->section8 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">

          <div class="section-title">
            <h2>{{ __('home.Gallery') }}</h2>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row no-gutters">

            @foreach ($Gallery as $img)

                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery-item">
                        <a href="{{ asset('uploads/GalleryHome/'.$img->image)}}" class="galelry-lightbox">
                        <img src="{{ asset('uploads/GalleryHome/'.$img->image)}}" alt="Gallery Al Dughaither Island" class="img-fluid">
                        </a>
                    </div>
                </div>

            @endforeach

          </div>

        </div>
      </section><!-- End Gallery Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact" style="background: {{ $bg_section[0]->section9 }}!important">
        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">

          <div class="section-title">
            <h2>{{ __('home.Contact') }}</h2>
          </div>
        </div>


        <div class="container" dir="{{ (App::getLocale()=='en')?'':'rtl' }}" >
          <div class="row mt-5">
            <div class="col-12 pb-5 contactUs_Map">
                {!! $ContactUs[0]->location_map !!}
            </div>
            <div class="col-lg-4">
              <div class="info" style="background: {{ $bg_section[0]->section9 }}!important">
                <div class="address">
                  <i class="bi bi-geo-alt" style="{{ (App::getLocale()=='en')?'':'float:right!important' }}"></i>
                  <h4 style="{{ (App::getLocale()=='en')?'':'padding: 0 60px 0 0px!important' }}">{{ __('home.Location') }} :</h4>
                  <p style="{{ (App::getLocale()=='en')?'':'padding: 0 60px 0 0px!important' }}">{{ (App::getLocale()=='en')?$ContactUs[0]->location_address:$ContactUs[0]->location_address_ar }}</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope" style="{{ (App::getLocale()=='en')?'':'float:right!important' }}"></i>
                  <h4 style="{{ (App::getLocale()=='en')?'':'padding: 0 60px 0 0px!important' }}">{{ __('home.Email') }} :</h4>
                  <p style="{{ (App::getLocale()=='en')?'':'padding: 0 60px 0 0px!important' }}">{{ $ContactUs[0]->email }}</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone" style="{{ (App::getLocale()=='en')?'':'float:right!important' }}"></i>
                  <h4 style="{{ (App::getLocale()=='en')?'':'padding: 0 60px 0 0px!important' }}">{{ __('home.Phone') }} :</h4>
                  <p style="{{ (App::getLocale()=='en')?'':'padding: 0 60px 0 0px!important' }}">{{ $ContactUs[0]->phone }}</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="{{ route('send_mail') }}" method="POST" role="form" class="php-email-form" style="background: {{ $bg_section[0]->section9 }}!important">
                @csrf
                <input type="hidden" name="email_send" value="{{ $ContactUs[0]->email }}"/>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" name="name" id="name" placeholder="{{ __('home.Your Name') }}" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('home.Email') }}" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('home.Subject') }}" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="{{ __('home.Message') }}" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">{{ __('home.Loading') }}</div>
                  <div class="error-message"></div>
                  <div class="sent-message">{{ __('home.Your message has been sent. Thank you') }}!</div>
                </div>
                <div class="text-center"><button type="submit">{{ __('home.Send Message') }}</button></div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->


</main><!-- End #main -->

<style>
    .contactUs_Map iframe{
        width: 100%!important;
        height: 300px!important;
    }
</style>
@endsection
