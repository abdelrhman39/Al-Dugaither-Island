@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.HomePage') }}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">{{ __('admin.HomePage') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{ __('admin.bg_section') }}</a>
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
                                    <h4 class="card-title">{{ __('admin.bg_section') }}</h4>
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
                                        <form action="{{ route('admin.Update_dabg_sections_HomePage') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <div class="controls">
                                                        <select name="bg_section" required class="form-control">
                                                            <option value="section2">{{ __('admin.Why Choose') }}</option>
                                                            <option value="section3">{{ __('admin.About us Home') }}</option>
                                                            <option value="section4">{{ __('admin.HomePage/Services') }}</option>
                                                            <option value="section5">{{ __('admin.Home (Amalid departments)') }}</option>
                                                            <option value="section6">{{ __('admin.HomePage/Proposals') }}</option>
                                                            <option value="section7">{{ __('admin.HomePage/Partners') }}</option>
                                                            <option value="section8">{{ __('admin.HomePage/Gallery') }}</option>
                                                            <option value="section9">{{ __('admin.HomePage/Contact Us') }}</option>
                                                            <option value="section_footer">{{ __('admin.section_footer') }}</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>{{ __('admin.color') }}</label>
                                                    <input type="color" name="color" value="#ffffff">
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
                </section>
                <!-- Input Validation end -->

            </div>
        </div>
    </div>

@endsection
