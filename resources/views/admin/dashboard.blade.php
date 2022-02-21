@extends('layouts.admin')

@section('content')




    <div class="app-content content" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
        <div class="content-wrapper" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- eCommerce statistic -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">{{ count($Products) }}</h3>
                                            <h6>{{ __('admin.Products') }}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-basket-loaded info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">{{ count($Restaurants) }}</h3>
                                            <h6>{{ __('admin.New Restaurants') }}</h6>
                                        </div>
                                        <div>
                                            <i class="fas fa-utensils warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">{{ count($users) }}</h3>
                                            <h6>{{ __('admin.New Customers') }}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">{{ count($views) }}</h3>
                                            <h6>{{ __('admin.Site Views') }}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-users danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">{{ count($Fitness_Room_views) }}</h3>
                                            <h6>{{ __('admin.Site Fitness Room Views') }}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-users danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">{{ count($Parking) }}</h3>
                                            <h6>{{ __('admin.New Parking') }}</h6>
                                        </div>
                                        <div>
                                            <i class="icon-pie-chart danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/ eCommerce statistic -->

                <!-- Recent Transactions -->
                <div class="row">
                    <div id="recent-transactions" class="col-12">
                        <div class="card" dir="{{ (App::getLocale()=='en')?'':'rtl' }}">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('admin.All Customers/Users') }}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    @include('admin.includes.alerts.errors')
                                    @include('admin.includes.alerts.success')

                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">{{ __('admin.ID') }}</th>
                                                <th class="border-top-0">{{ __('home.Name') }}</th>
                                                <th class="border-top-0">{{ __('home.Email') }}</th>
                                                <th class="border-top-0">{{ __('admin.Online/Offline') }}</th>
                                                @if (Auth()->guard('admin')->user()->is_super == 1 )
                                                    <th class="border-top-0">{{ __('admin.Action') }}</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td class="text-truncate">{{ $user->id }}</td>
                                                    <td class="text-truncate">{{ $user->name }}</td>
                                                    <td class="text-truncate">{{ $user->email }}</td>
                                                    <td class="text-truncate p-1">
                                                        @if ($user->last_activity and $user->user_id)
                                                            <i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                                            {{ (App::getLocale()=='en')?'Online':'متصل' }}
                                                        @else
                                                            <i class="la la-dot-circle-o black font-medium-1 mr-1"></i>
                                                            {{ (App::getLocale()=='en')?'Offline':' غير متصل' }}
                                                        @endif
                                                    </td>
                                                    @if (Auth()->guard('admin')->user()->is_super == 1 )
                                                        <td class="text-truncate">
                                                            <a href="{{ route('admin.delete_user', $user->id) }}" type="button"
                                                                class="btn btn-danger" data-repeater-delete="">
                                                                <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                            </a>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach

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


@endsection
