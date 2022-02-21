@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.Home (Amalid departments)') }}</h3>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.Add Departments Home Page') }}</a>
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

                                        <form action="{{ route('admin.AddDepartmentsHome') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Department Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="department" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Department Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="department_ar" class="form-control">
                                                    </div>
                                                </div>



                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Department Description EN') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="10" name="desc_department" maxlength="300"
                                                            minlength="100" id="textarea" class="form-control"
                                                            placeholder="Department Description EN"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Department Description AR') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="10" name="desc_department_ar" maxlength="300"
                                                            minlength="100" id="textarea" class="form-control"
                                                            placeholder="Deoartment Description AR"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.image Department') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.link') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="url" name="link" class="form-control">
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
                                    <h4 class="card-title">{{ __('admin.Home (Amalid departments)') }} </h4>
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
                                                                <th>{{ __('admin.image Department') }}</th>
                                                                <th>{{ __('admin.Departments Name EN') }}</th>
                                                                <th>{{ __('admin.Departments Name AR') }}</th>
                                                                <th>{{ __('admin.Departments Description EN') }}</th>
                                                                <th>{{ __('admin.Departments Description AR') }}</th>
                                                                <th>{{ __('admin.Settings') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($DepartmentsHome)
                                                                @foreach ($DepartmentsHome as $department)
                                                                    <tr>
                                                                        <th>{{ $department->id }}</th>
                                                                        <th><img src="{{ asset('uploads/department/'.$department->image ) }}" width="150px" />                                                                        </th>
                                                                        <th>{{ $department->department }}</th>
                                                                        <th>{{ $department->department_ar }}</th>
                                                                        <th>{{ $department->desc_department }}</th>
                                                                        <th>{{ $department->desc_department_ar }}</th>
                                                                        <th class="text-nowrap">
                                                                            <button data-toggle="modal"
                                                                                data-target="#EditServ{{ $department->id }}"
                                                                                class="btn btn-primary">
                                                                                <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                            </button>

                                                                            <a href="" type="button"
                                                                                class="btn btn-danger" data-toggle="modal"
                                                                                data-target="#Delete{{ $department->id }}">
                                                                                <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                            </a>
                                                                            <!-- Start Modal -->
                                                                            {{-- Start Modal Delete --}}
                                                                            <div class="modal animated tada text-left"
                                                                                id="Delete{{ $department->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel43"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title"
                                                                                                id="myModalLabel43">{{ __('admin.Are you sure to delete') }}
                                                                                                {{ $department->department }}
                                                                                                -
                                                                                                {{ $department->department_ar }}
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
                                                                                            <form action="{{ route('admin.Delete_DepartmentsHome',$department->id) }}"
                                                                                                method="POST">
                                                                                                @csrf
                                                                                                <button type="button"
                                                                                                    class="btn grey btn-outline-secondary"
                                                                                                    data-dismiss="modal">{{ __('admin.Close') }}</button>

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
                                                                                id="EditServ{{ $department->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Edit') }}
                                                                                                {{ $department->department }}-{{ $department->department_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form action="{{ route('admin.Edit_And_Update_DepartmentsHome',$department->id) }}" method="POST"
                                                                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                            @csrf
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="id_header" value="{{ $department->id }}" />

                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Department Name EN') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" name="department"
                                                                                                                value="{{ $department->department }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Department Name AR') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" name="department_ar"
                                                                                                                value="{{ $department->department_ar }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>



                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Department Description EN') }}<code>{{ __('admin.Max Character:300, Min:100') }}</code>
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <textarea rows="10" name="desc_department" maxlength="300" minlength="100"
                                                                                                                id="textarea" class="form-control"
                                                                                                                placeholder="Department Description EN">{{ $department->desc_department }}</textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Department Description AR') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <textarea rows="10" name="desc_department_ar" maxlength="300" minlength="100"
                                                                                                                id="textarea" class="form-control"
                                                                                                                placeholder="Department Description AR">{{ $department->desc_department_ar }}</textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.image Department') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <img src="{{ asset('uploads/department/'.$department->image ) }}" width="150px" />
                                                                                                        <div class="controls">
                                                                                                            <input type="file" name="image" value="{{ $department->image }}" class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.link') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="url" name="link" value="{{ $department->link }}" class="form-control">
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
