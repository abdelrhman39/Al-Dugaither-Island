@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.HomePage/Services') }}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">{{ __('admin.HomePage') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Services</a>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.Add Services Home Page') }}</a>
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

                                        <form action="{{ route('admin.AddServicesHome') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="services_name" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="services_name_ar" class="form-control">
                                                    </div>
                                                </div>



                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Description EN') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="10" name="services_desc" maxlength="300"
                                                            minlength="100" id="textarea" class="form-control"
                                                            placeholder="Services Description EN"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Description AR') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="10" name="services_desc_ar" maxlength="300"
                                                            minlength="100" id="textarea" class="form-control"
                                                            placeholder="Services Description AR"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Icon') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="icon" class="form-control">
                                                    </div>
                                                </div>

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
                                    <h4 class="card-title">{{ __('admin.HomePage/Services') }} </h4>
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

                                                <div class="dataTables_scrollBody"
                                                    style="position: relative; overflow: auto; width: 100%;">
                                                    <table
                                                        class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ __('admin.ID') }}</th>
                                                                <th>{{ __('admin.Service Name EN') }}</th>
                                                                <th>{{ __('admin.Service Name AR') }}</th>
                                                                <th>{{ __('admin.Service Description EN') }}</th>
                                                                <th>{{ __('admin.Service Description AR') }}</th>
                                                                <th>{{ __('admin.Icon') }}</th>
                                                                <th>{{ __('admin.Settings') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($ServicesHome)
                                                                @foreach ($ServicesHome as $Service)
                                                                    <tr>
                                                                        <th>{{ $Service->id }}</th>
                                                                        <th>{{ $Service->services_name }}</th>
                                                                        <th>{{ $Service->services_name_ar }}</th>
                                                                        <th>{{ $Service->services_desc }}</th>
                                                                        <th>{{ $Service->services_desc_ar }}</th>
                                                                        <th><i class="{{ $Service->icon }} text-lg"></i></th>
                                                                        <th class="text-nowrap">
                                                                            <button data-toggle="modal"
                                                                                data-target="#EditServ{{ $Service->id }}"
                                                                                class="btn btn-primary">
                                                                                <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                            </button>

                                                                            <a href="" type="button"
                                                                                class="btn btn-danger" data-toggle="modal"
                                                                                data-target="#Delete{{ $Service->id }}">
                                                                                <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                            </a>
                                                                            <!-- Start Modal -->
                                                                            {{-- Start Modal Delete --}}
                                                                            <div class="modal animated tada text-left"
                                                                                id="Delete{{ $Service->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel43"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title"
                                                                                                id="myModalLabel43">{{ __('admin.Are you sure to delete') }}
                                                                                                {{ $Service->services_name }}
                                                                                                -
                                                                                                {{ $Service->services_name }}
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
                                                                                            <form action="{{ route('admin.Delete_ServicesHome', $Service->id) }}"
                                                                                                method="POST">
                                                                                                @csrf
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
                                                                            {{-- Start Modal Edit --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="EditServ{{ $Service->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Edit') }}
                                                                                                {{ $Service->services_name }}-{{ $Service->services_name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form action="{{ route('admin.Edit_And_Update_ServicesHome',$Service->id) }}" method="POST"
                                                                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                            @csrf
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="id_header" value="{{ $Service->id }}" />

                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Service Name EN') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" name="services_name"
                                                                                                                value="{{ $Service->services_name }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Service Name AR') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" name="services_name_ar"
                                                                                                                value="{{ $Service->services_name_ar }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>



                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Services Description EN') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <textarea rows="10" name="services_desc" maxlength="300" minlength="100"
                                                                                                                id="textarea" class="form-control"
                                                                                                                placeholder="Services Description EN">{{ $Service->services_desc }}</textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Services Description AR') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <textarea rows="10" name="services_desc_ar" maxlength="300" minlength="100"
                                                                                                                id="textarea" class="form-control"
                                                                                                                placeholder="Services Description AR">{{ $Service->services_desc_ar }}</textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Icon') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <span i class="{{ $Service->icon }}"><span>
                                                                                                            <input type="text" name="icon"
                                                                                                                value="{{ $Service->icon }}"
                                                                                                                class="form-control">
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
                                                                            <!-- End Modal -->
                                                                        </th>
                                                                    </tr>
                                                                @endforeach
                                                            @endisset

                                                        </tbody>
                                                    </table>
                                                </div>


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
