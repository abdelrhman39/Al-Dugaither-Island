@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block"> {{ __('admin.Admins') }}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">{{ __('admin.Admins') }}</a>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.Add Admins') }} </a>
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

                                        <form action="{{ route('admin.Add_Admin') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('home.Name') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="Admin_name" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('home.Email') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="email" name="Admin_email" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('home.Password') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="password" name="Admin_password" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <div class="controls">
                                                        <select name="is_super" required class="form-control">
                                                            <option value="admin_restaurant">{{ __('admin.Admin Restaurant') }}</option>
                                                            <option value="admin_fitness">{{ __('admin.Admin Fitness Room') }} </option>
                                                            <option value="admin_parking">{{ __('admin.Admin Parking') }} </option>
                                                            <option value="1">{{ __('admin.Super Admin') }}</option>
                                                        </select>
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
                                    <h4 class="card-title">{{ __('admin.Admins') }} </h4>
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
                                                                <th>{{ __('home.Name') }} </th>
                                                                <th>{{ __('home.Email') }}</th>
                                                                <th>{{ __('admin.Admin Role') }}</th>
                                                                <th>{{ __('admin.Settings') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($All_Admins)
                                                                @foreach ($All_Admins as $Admin)
                                                                    <tr>
                                                                        <th>{{ $Admin->id }}</th>
                                                                        <th>{{ $Admin->name }}</th>
                                                                        <th>{{ $Admin->email }}</th>
                                                                        <th>
                                                                            @if ($Admin->is_super === '1')
                                                                                {{ __('admin.Super Admin') }}
                                                                            @endif
                                                                            @if($Admin->is_super === 'admin_restaurant')
                                                                                {{ __('admin.Admin Restaurant') }}
                                                                            @endif
                                                                            @if($Admin->is_super === 'admin_fitness')
                                                                                {{ __('admin.Admin Fitness') }}
                                                                            @endif
                                                                            @if($Admin->is_super === 'admin_parking')
                                                                                {{ __('admin.Admin Parking') }}
                                                                            @endif

                                                                        </th>
                                                                        <th class="text-nowrap">
                                                                            <button data-toggle="modal"
                                                                                data-target="#EditAdmin{{ $Admin->id }}"
                                                                                class="btn btn-primary">
                                                                                <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                            </button>

                                                                            <a href="" type="button"
                                                                                class="btn btn-danger" data-toggle="modal"
                                                                                data-target="#Delete{{ $Admin->id }}">
                                                                                <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                            </a>
                                                                            <!-- Start Modal -->
                                                                            {{-- Start Modal Delete --}}
                                                                            <div class="modal animated tada text-left"
                                                                                id="Delete{{ $Admin->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel43"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title"
                                                                                                id="myModalLabel43">
                                                                                                Are you sure to delete
                                                                                                {{ $Admin->name }}
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
                                                                                            <form action="{{ route('admin.Delete_Admin', $Admin->id) }}"
                                                                                                method="POST">
                                                                                                @csrf
                                                                                                <button type="button"
                                                                                                    class="btn grey btn-outline-secondary"
                                                                                                    data-dismiss="modal">Close</button>

                                                                                                <button type="submit"
                                                                                                    class="btn btn-outline-primary">Yes
                                                                                                    Delete</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- End Modal Delete --}}
                                                                            {{-- Start Modal Edit --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="EditAdmin{{ $Admin->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> Edit
                                                                                                {{ $Admin->name }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form action="{{ route('admin.Edit_And_Update_Admin',$Admin->id) }}" method="POST"
                                                                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                            @csrf
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="id_Admin" value="{{ $Admin->id }}" />

                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>Admin Name
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" value="{{ $Admin->name }}" name="Admin_name" required class="form-control">
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>Admin Email
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="email" value="{{ $Admin->email }}" name="Admin_email" required class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>Admin Password
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="password" value="{{ $Admin->password }}" name="Admin_password" required class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <div class="controls">
                                                                                                            <select name="is_super" required class="form-control">
                                                                                                                <option @if($Admin->is_super == 'admin_restaurant') selected @endif value="admin_restaurant">{{ __('admin.Admin Restaurant') }}</option>
                                                                                                                <option @if($Admin->is_super == 'admin_fitness') selected @endif value="admin_fitness">{{ __('admin.Admin Fitness Room') }} </option>
                                                                                                                <option @if($Admin->is_super == 'admin_parking') selected @endif value="admin_parking">{{ __('admin.Admin Parking') }} </option>
                                                                                                                <option @if($Admin->is_super == 1) selected @endif value="1">{{ __('admin.Super Admin') }}</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="submit" class="btn btn-success">Update <i
                                                                                                    class="la la-thumbs-o-up position-right"></i></button>
                                                                                                <button type="reset" class="btn btn-danger">Reset <i
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
