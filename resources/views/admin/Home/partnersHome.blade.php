@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.HomePage/Partners') }}</h3>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.Add Partners Logo Home Page') }}</a>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li class="btn btn-danger btn-sm"><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse" style="">
                            <div class="card-body">
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form action="{{ route('admin.PartnersHome') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf
                                            <div class="row">
                                                <label for="#Images">{{ __('admin.Upload Images') }}</label>
                                                <input type="file" multiple name="logo[]" id="Images" class="form-control" >
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">{{ __('admin.Save') }} <i
                                                        class="la la-thumbs-o-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">{{ __('admin.Reset') }} <i
                                                        class="la la-refresh position-right"></i></button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('admin.Partners Logo Page') }} </h4>
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

                                                <!-- Image grid -->

                                                    <div class="card-body " itemscope itemtype="http://schema.org/ImageGallery">
                                                        <div class="row">
                                                            @isset($PartnersHome)
                                                                @foreach ($PartnersHome as $img)
                                                                    <figure class="col-lg-3 col-md-6 col-12  position-relative" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                                        <a  href="{{ asset('uploads/partnersHome/'.$img->logo)}}" itemprop="contentUrl" data-size="480x360">
                                                                        <img class="img-thumbnail img-fluid" src="{{ asset('uploads/partnersHome/'.$img->logo)}}"
                                                                        itemprop="thumbnail" alt="Image description" />
                                                                        </a>
                                                                        <a data-toggle="modal"
                                                                            data-target="#Delete{{ $img->id }}" class="btn btn-outline-danger p-1 rounded position-absolute " style="top: 5px;left:20px;z-index: 10;"><i class="ft-trash lead"></i></a>
                                                                    </figure>
                                                                    {{-- Start Modal Delete --}}
                                                                    <div class="modal animated tada text-left"
                                                                    id="Delete{{ $img->id }}" tabindex="-1"
                                                                    role="dialog" aria-labelledby="myModalLabel43"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="myModalLabel43">{{ __('admin.Are you sure to delete') }}
                                                                                </h4>
                                                                                <button type="button"
                                                                                    class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="{{ route('admin.Delete_PartnersHome',$img->id) }}"
                                                                                    method="POST">
                                                                                    @csrf

                                                                                    <img class="img-thumbnail img-fluid" src="{{ asset('uploads/partnersHome/'.$img->logo)}}"
                                                                                        itemprop="thumbnail" alt="Image description" />

                                                                                    <button type="button"
                                                                                        class="btn grey btn-outline-secondary"
                                                                                        data-dismiss="modal">Close</button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-outline-primary">
                                                                                        {{ __('admin.Delete') }}</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                {{-- End Modal Delete --}}
                                                                @endforeach
                                                            @endisset

                                                        </div>
                                                    </div>

                                                <!--/ Image grid -->



                                            </div>
                                        </div>
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
    <style>
        th {
            white-space: normal !important;
        }

    </style>
@endsection
