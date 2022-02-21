@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">HomePage / Services</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">HomePage</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Services</a>
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
                                    <h4 class="card-title">Edit Services Home Page</h4>
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
                                                <form action="{{-- route('admin.ServicesHome_update') --}}" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                    @csrf
                                                    <input type="hidden" name="id_header" value="{{ $ServicesHome->id }}" />

                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <h5>Services Name En
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="services_name"
                                                                    value="{{ $ServicesHome->services_name }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>Services Name Ar
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="services_name_ar"
                                                                    value="{{ $ServicesHome->services_name_ar }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6 form-group">
                                                            <h5>Services Description EN<code>Max Character:300, Min:100 </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="services_desc" maxlength="300" minlength="100"
                                                                    id="textarea" class="form-control"
                                                                    placeholder="Services Description EN">{{ $ServicesHome->services_desc }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>Services Description AR<code>Max Character:300, Min:100 </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="services_desc_ar" maxlength="300" minlength="100"
                                                                    id="textarea" class="form-control"
                                                                    placeholder="Services Description AR">{{ $ServicesHome->services_desc_ar }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>Services Icon
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="icon"
                                                                    value="{{ $ServicesHome->icon }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>


                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-success">Update <i
                                                                    class="la la-thumbs-o-up position-right"></i></button>
                                                            <button type="reset" class="btn btn-danger">Reset <i
                                                                    class="la la-refresh position-right"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
