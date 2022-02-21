@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.HomePage/Contact Us') }}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">{{ __('admin.HomePage') }}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('admin.Edit Contact Us Home Page') }}</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    @include('admin.includes.alerts.success')
                                    @include('admin.includes.alerts.errors')
                                    <div class="card-body">
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <form action="{{ route('admin.ContactUsHome_update') }}" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                    @csrf
                                                    <input type="hidden" name="id_header" value="{{ $ContactUsHome->id }}" />

                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <h5>{{ __('admin.Location Map Link (Google Map Embedd)') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                {!! $ContactUsHome->location_map !!}
                                                                <style>
                                                                    .controls iframe{
                                                                        width: 100%!important;
                                                                    }
                                                                </style>
                                                                <input type="url"  name="location_map" value="{{ $ContactUsHome->location_map }}" class="form-control"
                                                                    placeholder="Location Map Link (Google Map Embedd)">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Location Address EN') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="location_address"
                                                                    value="{{ $ContactUsHome->location_address }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Location Address AR') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="location_address_ar"
                                                                    value="{{ $ContactUsHome->location_address_ar }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('home.Email') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="email" name="email"
                                                                    value="{{ $ContactUsHome->email }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('home.Phone') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="phone"
                                                                    value="{{ $ContactUsHome->phone }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Facebook') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="facebook"
                                                                    value="{{ $ContactUsHome->facebook }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5> {{ __('admin.Twitter') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="twitter"
                                                                    value="{{ $ContactUsHome->twitter }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Instagram') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="insta"
                                                                    value="{{ $ContactUsHome->insta }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Linkedin') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="linkedin"
                                                                    value="{{ $ContactUsHome->linkedin }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Whatsapp') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="whatsapp"
                                                                    value="{{ $ContactUsHome->whatsapp }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success">{{ __('admin.Update') }} <i
                                                                class="la la-thumbs-o-up position-right"></i></button>
                                                        <button type="reset" class="btn btn-danger">{{ __('admin.Reset') }} <i
                                                                class="la la-refresh position-right"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Input Validation end -->

            </div>
        </div>
    </div>

@endsection
