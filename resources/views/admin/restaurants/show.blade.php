@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.Restaurants') }}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">{{ __('admin.Restaurants') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{ __('admin.All Restaurants') }}</a>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.Add Restaurant') }}</a>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li class="btn btn-danger btn-sm"><a data-action="collapse"><i
                                                class="ft-plus"></i></a></li>
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

                                        <!-- Form wzard with step validation section start -->
                                        <section id="validation">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <form action="{{ url('admin/add_restaurants') }}"
                                                                    method="POST" enctype="multipart/form-data"
                                                                    class="steps-validation wizard-notification">
                                                                    @csrf
                                                                    <!-- Step 1 -->
                                                                    <h6>{{ __('admin.Basic Information') }}</h6>
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="firstName3">
                                                                                        {{  __('admin.Name EN') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control required"
                                                                                        id="firstName3" name="name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="lastName3">
                                                                                        {{ __('admin.Name AR') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control required"
                                                                                        id="lastName3" name="name_ar">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>
                                                                                        {{ __('admin.Description EN') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <textarea rows="5" type="text"
                                                                                        class="form-control required"
                                                                                        name="description"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>
                                                                                        {{ __('admin.Description AR') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <textarea rows="5" type="text"
                                                                                        class="form-control required"
                                                                                        name="description_ar"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="phoneNumber3">{{ __('admin.Logo') }} : <span
                                                                                            class="danger">*</span></label>
                                                                                    <input type="file" name="logo"
                                                                                        class="form-control required">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="phoneNumber3">{{ __('admin.Main Image') }}
                                                                                        :<span
                                                                                            class="danger">*</span></label>
                                                                                    <input type="file" name="main_image"
                                                                                        class="form-control required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="phoneNumber3">
                                                                                        {{ __('admin.Image Background') }} : <span
                                                                                            class="danger">*</span></label>
                                                                                    <input type="file" name="main_img_bg"
                                                                                        class="form-control required">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </fieldset>
                                                                    <!-- Step 2 -->
                                                                    <h6>{{ __('admin.Social Media') }}</h6>
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="proposalTitle3">
                                                                                        {{ __('admin.Experience Count') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="number"
                                                                                        class="form-control required"
                                                                                        name="experience">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="emailAddress6">
                                                                                        {{ __('home.Email') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="email" name="email"
                                                                                        class="form-control required"
                                                                                        id="emailAddress6">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="videoUrl3">
                                                                                        {{ __('home.Phone') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="tel"
                                                                                        class="form-control required"
                                                                                        name="phone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="jobTitle3">
                                                                                        {{ __('admin.Facebook') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control required"
                                                                                        name="facebook">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="shortDescription3">
                                                                                        {{ __('admin.Twitter') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control required"
                                                                                        name="twitter">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="jobTitle3">
                                                                                        {{ __('admin.Instagram') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control required"
                                                                                        name="insta">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="shortDescription3">
                                                                                        {{ __('admin.Linkedin') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control required"
                                                                                        name="linkedin">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="shortDescription3">
                                                                                        {{ __('admin.Whatsapp') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <input type="tel"
                                                                                        class="form-control required"
                                                                                        name="whatsapp">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                    <!-- Step 3 -->
                                                                    <h6>{{ __('admin.Images/Administrator') }}</h6>
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="eventName3">
                                                                                        {{  __('admin.Administrator') }} :
                                                                                        <span
                                                                                            class="danger">*</span>
                                                                                    </label>
                                                                                    <select class="c-select form-control"
                                                                                        name="admin_id">
                                                                                        <option disabled value="">
                                                                                            {{  __('admin.Select Admin ') }}</option>
                                                                                        @foreach ($admins as $admin)

                                                                                            <option
                                                                                                value="{{ $admin->id }}">
                                                                                                {{ $admin->name }}
                                                                                            </option>

                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="meetingName3">
                                                                                        {{ __('admin.Images Restaurant (Select multiple Images )') }} :
                                                                                    </label>
                                                                                    <input type="file" name="images[]"
                                                                                        multiple class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <button type="submit"
                                                                            class="btn btn-primary">{{ __('admin.Save')}}</button>
                                                                    </fieldset>


                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Form wzard with step validation section end -->

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
                                    <h4 class="card-title">{{ __('admin.All Restaurants') }} </h4>
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
                                                    style="padding-bottom: 50px;position: relative;overflow: auto;width: 100%;">
                                                    <table
                                                        class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ __('admin.ID') }}</th>
                                                                <th> {{ __('admin.Name EN') }}</th>
                                                                <th> {{ __('admin.Name AR') }}</th>
                                                                <th> {{ __('admin.Description EN') }}</th>
                                                                <th> {{ __('admin.Description AR') }}</th>
                                                                <th>{{ __('admin.Main Image') }}</th>
                                                                <th>{{ __('admin.Logo') }}</th>
                                                                <th>{{ __('admin.Image Background') }}</th>
                                                                <th>{{ __('admin.Experience Count') }}</th>
                                                                <th>{{ __('home.Email') }}</th>
                                                                <th>{{ __('home.Phone') }}</th>
                                                                <th>{{ __('admin.Social Media') }}</th>
                                                                <th>{{ __('admin.Admin') }}</th>
                                                                <th>{{ __('admin.Settings') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($Restaurants)
                                                                @foreach ($Restaurants as $Restaurant)
                                                                    <tr>
                                                                        <th>{{ $Restaurant->id }}</th>
                                                                        <th><a href="{{ url('Restaurant'.$Restaurant->id) }}">{{ $Restaurant->name }}</a></th>
                                                                        <th>{{ $Restaurant->name_ar }}</th>
                                                                        <th>{{ substr($Restaurant->description, 0, 30) }}...
                                                                            <!-- Button trigger modal -->
                                                                            @if (strlen($Restaurant->description_ar) > 30)
                                                                                <button type="button" class="btn btn-primary"
                                                                                    data-toggle="modal"
                                                                                    data-target="#seeMore{{ $Restaurant->id }}">
                                                                                    {{ __('admin.More') }}...
                                                                                </button>
                                                                            @endif

                                                                            <!-- Modal -->
                                                                            <div class="modal fade"
                                                                                id="seeMore{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="exampleModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-body">
                                                                                            <h2 style="white-space: normal">
                                                                                                {{ $Restaurant->description }}
                                                                                            </h2>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </th>
                                                                        <th>{{ substr($Restaurant->description_ar, 0, 30) }}...

                                                                            <!-- Button trigger modal -->
                                                                            @if (strlen($Restaurant->description_ar) > 30)

                                                                                <button type="button" class="btn btn-primary"
                                                                                    data-toggle="modal"
                                                                                    data-target="#seeMore_ar{{ $Restaurant->id }}">
                                                                                    More...
                                                                                </button>

                                                                            @endif

                                                                            <!-- Modal Mote Show Description-->
                                                                            <div class="modal fade"
                                                                                id="seeMore_ar{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="exampleModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-body">
                                                                                            <h2 style="white-space: normal">
                                                                                                {{ $Restaurant->description_ar }}
                                                                                                <h2>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </th>
                                                                        <th><img width="120px"
                                                                            src="{{ asset('uploads/Restaurants/' . $Restaurant->logo) }}" />
                                                                        </th>
                                                                        <th><img width="120px"
                                                                                src="{{ asset('uploads/Restaurants/' . $Restaurant->main_image) }}" />
                                                                        </th>
                                                                        <th><img width="120px"
                                                                                src="{{ asset('uploads/Restaurants/' . $Restaurant->main_img_bg) }}" />
                                                                        </th>
                                                                        <th>{{ $Restaurant->experience }}</th>
                                                                        <th>{{ $Restaurant->email }}</th>
                                                                        <th>{{ $Restaurant->phone }}</th>

                                                                        <th>
                                                                            <a href="{{ $Restaurant->facebook }}"><i
                                                                                    class="fab fa-facebook"></i></a>
                                                                            <a href="{{ $Restaurant->twitter }}"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <a href="{{ $Restaurant->linkedin }}"><i
                                                                                    class="fab fa-linkedin"></i></a>
                                                                            <a href="{{ $Restaurant->insta }}"><i
                                                                                    class="fab fa-instagram"></i></a>
                                                                            <a href="{{ $Restaurant->whatsapp }}"><i
                                                                                    class="fab fa-whatsapp"></i></a>
                                                                        </th>
                                                                        <th>{{ $Restaurant->admin_Name }}</th>

                                                                        <th class="text-nowrap">

                                                                            <div class="btn-group float-md-right" role="group"
                                                                                aria-label="Button group with nested dropdown">
                                                                                <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="ft-settings icon-left"></i>
                                                                                    Settings
                                                                                </button>
                                                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#Edit{{ $Restaurant->id }}">
                                                                                        <i class="ft-settings icon-left"></i> {{ __('admin.Edit Data') }}
                                                                                    </a>
                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#Delete{{ $Restaurant->id }}">
                                                                                        <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                                    </a>

                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#Edit_Images{{ $Restaurant->id }}">
                                                                                        <i class="ft-settings icon-left"></i> {{ __('admin.Edit Images') }}
                                                                                    </a>

                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#restaurant_services{{ $Restaurant->id }}">
                                                                                        <i class="far fa-calendar-plus"></i> {{ __('admin.Services') }}
                                                                                    </a>

                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#restaurant_Products{{ $Restaurant->id }}">
                                                                                        <i class="fas fa-cart-arrow-down"></i> {{ __('admin.Products') }}
                                                                                    </a>

                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#Restaurant_Chefs{{ $Restaurant->id }}">
                                                                                        <i class="fas fa-utensils"></i> {{ __('admin.Chefs') }}
                                                                                    </a>

                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#Restaurant_Menu{{ $Restaurant->id }}">
                                                                                        <i class="fas fa-utensils"></i> {{ __('admin.Food Menu') }}
                                                                                    </a>

                                                                                </div>
                                                                            </div>


                                                                            <!-- Start Modal -->
                                                                            {{-- Start Modal Delete --}}
                                                                            <div class="modal fade  animated tada text-left"
                                                                                id="Delete{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel43"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title"
                                                                                                id="myModalLabel43">{{ __('admin.Are you sure to delete') }}
                                                                                                {{ $Restaurant->name }}
                                                                                                -
                                                                                                {{ $Restaurant->name_ar }}
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
                                                                                            <form action="{{ route('admin.delete_restaurants',$Restaurant->id) }}"
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
                                                                                id="Edit{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog"
                                                                                    role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> Edit
                                                                                                {{ $Restaurant->name }}-{{ $Restaurant->name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>

                                                                                        <form action="{{ route('admin.update_restaurants',$Restaurant->id) }}"
                                                                                            method="POST" enctype="multipart/form-data"
                                                                                            class="steps-validation wizard-notification">
                                                                                            @csrf
                                                                                            <!-- Step 1 -->
                                                                                            <h6>{{ __('admin.Basic Information') }}</h6>
                                                                                            <fieldset>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="firstName3">
                                                                                                                {{  __('admin.Name EN') }} :
                                                                                                                <span
                                                                                                                    class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="text" class="form-control required"
                                                                                                                value="{{ $Restaurant->name}}" name="name">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="lastName3">
                                                                                                                {{  __('admin.Name AR') }} :
                                                                                                                <span
                                                                                                                    class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="text" class="form-control required"
                                                                                                                value="{{ $Restaurant->name_ar }}" name="name_ar">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label>
                                                                                                                {{ __('admin.Description EN') }} :
                                                                                                                <span
                                                                                                                    class="danger">*</span>
                                                                                                            </label>
                                                                                                            <textarea rows="5" type="text"
                                                                                                                class="form-control required"
                                                                                                                name="description">{{ $Restaurant->description}}</textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label>
                                                                                                                {{ __('admin.Description AR') }} :
                                                                                                                <span
                                                                                                                    class="danger">*</span>
                                                                                                            </label>
                                                                                                            <textarea rows="5" type="text" class="form-control required"
                                                                                                                name="description_ar">{{ $Restaurant->description_ar}}</textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <img width="100px" src="{{ asset('uploads/Restaurants/'.$Restaurant->logo) }}">
                                                                                                            <label for="phoneNumber3">{{ __('admin.Logo') }} : <span class="danger">*</span></label>
                                                                                                            <input type="file" name="logo"
                                                                                                                class="form-control ">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <img width="100px" src="{{ asset('uploads/Restaurants/'.$Restaurant->main_image) }}">
                                                                                                            <label for="phoneNumber3">{{ __('admin.Main Image') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="file" name="main_image" class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <img width="100px" src="{{ asset('uploads/Restaurants/'.$Restaurant->main_img_bg) }}">                                                                                                            <label for="phoneNumber3">Image
                                                                                                                {{ __('admin.Image Background') }} : <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="file" name="main_img_bg"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </fieldset>
                                                                                            <!-- Step 2 -->
                                                                                            <h6>{{ __('admin.Social Media') }}</h6>
                                                                                            <fieldset>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="proposalTitle3">
                                                                                                                {{ __('admin.Experience Count') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="number" value="{{ $Restaurant->experience}}"
                                                                                                                class="form-control required"
                                                                                                                name="experience">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="emailAddress6">
                                                                                                                {{ __('home.Email') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="email" name="email" value="{{ $Restaurant->email}}"
                                                                                                                class="form-control required"
                                                                                                                id="emailAddress6">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="videoUrl3">
                                                                                                                {{ __('home.Phone') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="tel" value="{{ $Restaurant->phone}}"
                                                                                                                class="form-control required"
                                                                                                                name="phone">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="jobTitle3">
                                                                                                                {{ __('admin.Facebook') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="text" value="{{ $Restaurant->facebook}}"
                                                                                                                class="form-control required"
                                                                                                                name="facebook">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="shortDescription3">
                                                                                                                {{ __('admin.Twitter') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="text" value="{{ $Restaurant->twitter}}"
                                                                                                                class="form-control required"
                                                                                                                name="twitter">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="jobTitle3">
                                                                                                                {{ __('admin.Instagram') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="text" value="{{ $Restaurant->insta}}"
                                                                                                                class="form-control required"
                                                                                                                name="insta">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="shortDescription3">
                                                                                                                {{ __('admin.Linkedin') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="text" value="{{ $Restaurant->linkedin}}"
                                                                                                                class="form-control required"
                                                                                                                name="linkedin">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="shortDescription3">
                                                                                                                {{ __('admin.Whatsapp') }} :
                                                                                                                <span class="danger">*</span>
                                                                                                            </label>
                                                                                                            <input type="tel" value="{{ $Restaurant->whatsapp}}"
                                                                                                                class="form-control required"
                                                                                                                name="whatsapp">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </fieldset>
                                                                                            <!-- Step 3 -->
                                                                                            <h6>{{ __('admin.Images/Administrator') }}</h6>
                                                                                            <fieldset>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="form-group">
                                                                                                            <label for="eventName3">
                                                                                                                {{ __('admin.Administrator') }} :
                                                                                                                <span
                                                                                                                    class="danger">*</span>
                                                                                                            </label>
                                                                                                            <select class="c-select form-control"
                                                                                                                name="admin_id">
                                                                                                                <option disabled value="">{{  __('admin.Select Admin ') }} </option>
                                                                                                                @foreach ($admins as $admin)

                                                                                                                    <option @if ($Restaurant->admin_id == $admin->id) selected @endif value="{{ $admin->id }}">
                                                                                                                        {{ $admin->name }}
                                                                                                                    </option>

                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <button type="submit"
                                                                                                    class="btn btn-primary">{{ __('admin.Update') }}</button>
                                                                                            </fieldset>


                                                                                        </form>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- End Modal Edit --}}

                                                                            {{-- Start Modal Edit Images --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="Edit_Images{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog"
                                                                                    role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35">
                                                                                                {{ $Restaurant->name }}-{{ $Restaurant->name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>


                                                                                        <div class="row">
                                                                                            <div class="col-md-11 m-auto">
                                                                                                <div class="card">
                                                                                                    <div class="card-header bg-info text-white">
                                                                                                        <a data-action="collapse" class="card-title">{{ __('admin.Add Image Restaurant') }}</a>
                                                                                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                                                                                        <div class="heading-elements">
                                                                                                            <ul class="list-inline mb-0">
                                                                                                                <li class="btn btn-danger btn-sm"><a data-action="collapse"><i
                                                                                                                            class="ft-plus"></i></a></li>
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

                                                                                                                    <form action="{{ route('admin.Add_Image_restaurants',$Restaurant->id) }}"
                                                                                                                        method="POST" enctype="multipart/form-data" >
                                                                                                                        @csrf
                                                                                                                        <input type="hidden" name="Restaurant_id" value="{{ $Restaurant->id }}"/>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Images') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="file" multiple name="image[]" class="form-control">
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

                                                                                            @isset($RestaurantsImages)
                                                                                                @foreach ($RestaurantsImages as $img)
                                                                                                    @if ($Restaurant->id == $img->Restaurant_id)

                                                                                                        <figure class="col-lg-3 col-md-6 col-12  position-relative" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                                                                            <a  href="{{ asset('uploads/Restaurants/'.$img->image)}}" itemprop="contentUrl" data-size="480x360">
                                                                                                            <img class="img-thumbnail img-fluid" src="{{ asset('uploads/Restaurants/'.$img->image)}}"
                                                                                                            itemprop="thumbnail" alt="Image description" />
                                                                                                            </a>
                                                                                                            <a data-toggle="modal"
                                                                                                                data-target="#DeleteImageGallary{{ $img->id }}" class="btn btn-outline-danger p-1 rounded position-absolute " style="top: 5px;left:20px;z-index: 10;"><i class="ft-trash lead"></i></a>
                                                                                                        </figure>
                                                                                                        {{-- Start Modal Delete --}}
                                                                                                        <div class="modal animated tada text-left"
                                                                                                            id="DeleteImageGallary{{ $img->id }}" tabindex="-1"
                                                                                                            role="dialog" aria-labelledby="myModalLabel43"
                                                                                                            aria-hidden="true">
                                                                                                            <div class="modal-dialog " role="document">
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
                                                                                                                    <form action="{{ route('admin.delete_Image_restaurants',$img->id) }}"method="POST">
                                                                                                                        @csrf
                                                                                                                        <div class="modal-body">
                                                                                                                            <img class="img-thumbnail img-fluid" src="{{ asset('uploads/Restaurants/'.$img->image)}}" itemprop="thumbnail" alt="Image description" />
                                                                                                                        </div>
                                                                                                                        <div class="modal-foot">
                                                                                                                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">
                                                                                                                                Close
                                                                                                                            </button>

                                                                                                                            <button type="submit" class="btn btn-outline-primary">
                                                                                                                                 {{ __('admin.Delete') }}
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        {{-- End Modal Delete --}}

                                                                                                    @endif
                                                                                                @endforeach
                                                                                            @endisset

                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- End Modal Edit Images --}}


                                                                            {{-- Start Modal Restaurant Services --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="restaurant_services{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog"
                                                                                    role="document">
                                                                                    <div class="modal-content" style="height: 100%;">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Restaurant Services') }}
                                                                                                {{ $Restaurant->name }}-{{ $Restaurant->name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="modal-body">
                                                                                            <div class="col-md-12">
                                                                                                <div class="card">
                                                                                                    <div class="card-header bg-info text-white">
                                                                                                        <a data-action="collapse" class="card-title">{{ __('admin.Add Services Restaurant') }}</a>
                                                                                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                                                                                        <div class="heading-elements">
                                                                                                            <ul class="list-inline mb-0">
                                                                                                                <li class="btn btn-danger btn-sm"><a data-action="collapse"><i
                                                                                                                            class="ft-plus"></i></a></li>
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

                                                                                                                    <form action="{{ route('admin.Add_Services_Restaurants') }}"
                                                                                                                        method="POST" enctype="multipart/form-data" >
                                                                                                                        @csrf
                                                                                                                        <input type="hidden" name="Restaurant_id" value="{{ $Restaurant->id }}"/>
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
                                                                                                                                    <h5>{{ __('admin.Services Description EN') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <textarea rows="10" name="services_desc" maxlength="200"
                                                                                                                                            minlength="100" id="textarea" class="form-control"
                                                                                                                                            placeholder="Services Description EN"></textarea>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Services Description AR') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <textarea rows="10" name="services_desc_ar" maxlength="200"
                                                                                                                                            minlength="100" id="textarea" class="form-control"
                                                                                                                                            placeholder="Services Description AR"></textarea>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Services Icon') }}
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

                                                                                            <div class="dataTables_scrollBody"
                                                                                                style="position: relative; overflow: auto; width: 99%;">
                                                                                                <table
                                                                                                    class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>{{ __('admin.ID') }}</th>
                                                                                                            <th>{{ __('admin. Services Name EN') }}</th>
                                                                                                            <th> {{ __('admin.Services Name AR') }}</th>
                                                                                                            <th>{{ __('admin.Description EN') }} </th>
                                                                                                            <th> {{ __('admin.Description AR') }}</th>
                                                                                                            <th>{{ __('admin.Icon') }}</th>
                                                                                                            <th>{{ __('admin.Settings') }}</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @isset($Restaurant_Services)
                                                                                                            @foreach ($Restaurant_Services as $Service)
                                                                                                                <tr>
                                                                                                                    <th>{{ $Service->id }}</th>
                                                                                                                    <th>{{ $Service->services_name }}</th>
                                                                                                                    <th>{{ $Service->services_name_ar }}</th>
                                                                                                                    <th>{{ $Service->services_desc }}</th>
                                                                                                                    <th>{{ $Service->services_desc_ar }}</th>
                                                                                                                    <th><i class="{{ $Service->icon }}"></i></th>

                                                                                                                    <th>
                                                                                                                        <button data-toggle="modal"
                                                                                                                            data-target="#EditService{{ $Service->id }}"
                                                                                                                            class="btn btn-primary">
                                                                                                                            <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                                                                        </button>

                                                                                                                        <a href="{{ route('admin.delete_Services_restaurants',$Service->id) }}" type="button"
                                                                                                                            class="btn btn-danger" >
                                                                                                                            <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                                                                        </a>
                                                                                                                    </th>
                                                                                                                </tr>

                                                                                                                {{-- Start Modal Edit --}}
                                                                                                                <div class="modal  fade text-left posation-absolute"
                                                                                                                    id="EditService{{ $Service->id }}" tabindex="-1"
                                                                                                                    role="dialog" aria-labelledby="myModalLabel35"
                                                                                                                    aria-hidden="true">
                                                                                                                    <div class="modal-xl modal-dialog" role="document">
                                                                                                                        <div class="modal-content">
                                                                                                                            <div class="modal-header">
                                                                                                                                <h3 class="modal-title"
                                                                                                                                    id="myModalLabel35"> Service
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
                                                                                                                            <form action="{{ route('admin.Edit_And_Update_ServicesRestaurant',$Service->id) }}" method="POST"
                                                                                                                                enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                                                                @csrf
                                                                                                                                <div class="modal-body">
                                                                                                                                    <input type="hidden" name="id_header" value="{{ $Service->id }}" />

                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Services Name EN') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" name="services_name"
                                                                                                                                                    value="{{ $Service->services_name }}"
                                                                                                                                                    class="form-control">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Services Name AR') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" name="services_name_ar"
                                                                                                                                                    value="{{ $Service->services_name_ar }}"
                                                                                                                                                    class="form-control">
                                                                                                                                            </div>
                                                                                                                                        </div>



                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Services Description EN') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <textarea rows="10" name="services_desc" maxlength="200" minlength="100"
                                                                                                                                                    id="textarea" class="form-control"
                                                                                                                                                    placeholder="Services Description EN">{{ $Service->services_desc }}</textarea>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Services Description AR') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <textarea rows="10" name="services_desc_ar" maxlength="200" minlength="100"
                                                                                                                                                    id="textarea" class="form-control"
                                                                                                                                                    placeholder="Services Description AR">{{ $Service->services_desc_ar }}</textarea>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Services Icon') }}
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
                                                                                                            @endforeach
                                                                                                        @endisset
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>

                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- End Modal Restaurant Services --}}


                                                                            {{-- Start Modal Restaurant Products --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="restaurant_Products{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog"
                                                                                    role="document">
                                                                                    <div class="modal-content" style="height: 100%;">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Restaurant Products') }}
                                                                                                {{ $Restaurant->name }}-{{ $Restaurant->name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="modal-body">
                                                                                            <div class="col-md-12">
                                                                                                <div class="card">
                                                                                                    <div class="card-header bg-info text-white">
                                                                                                        <a data-action="collapse" class="card-title">{{ __('admin.Add Products Restaurant') }} </a>
                                                                                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                                                                                        <div class="heading-elements">
                                                                                                            <ul class="list-inline mb-0">
                                                                                                                <li class="btn btn-danger btn-sm"><a data-action="collapse"><i
                                                                                                                            class="ft-plus"></i></a></li>
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

                                                                                                                    @if ($errors->any())
                                                                                                                    <hr/>
                                                                                                                        <ul class="alert alert-danger">
                                                                                                                            @foreach($errors->all() as $error)
                                                                                                                                <li>{{ $error }}</li>
                                                                                                                            @endforeach
                                                                                                                        </ul>
                                                                                                                    @endif

                                                                                                                    <form action="{{ route('admin.Add_Products_Restaurants') }}"
                                                                                                                        method="POST" enctype="multipart/form-data" >
                                                                                                                        @csrf
                                                                                                                        <input type="hidden" name="Restaurant_id" value="{{ $Restaurant->id }}"/>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Image Product') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="file" name="image" class="form-control required ">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Name EN') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="product_name" class="form-control required">
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Name AR') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="product_name_ar" class="form-control required">
                                                                                                                                    </div>
                                                                                                                                </div>



                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Description EN') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <textarea rows="10" name="product_description" maxlength="200"
                                                                                                                                            minlength="100" id="textarea" class="form-control required"
                                                                                                                                            placeholder="Product Description EN"></textarea>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Description AR') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <textarea rows="10" name="product_description_ar" maxlength="200"
                                                                                                                                            minlength="100" id="textarea" class="form-control required"
                                                                                                                                            placeholder="Product Description AR"></textarea>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>Price
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="number" name="price" class="form-control required">
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

                                                                                            <div class="dataTables_scrollBody"
                                                                                                style="position: relative; overflow: auto; width: 99%;">
                                                                                                <table
                                                                                                    class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>{{ __('admin.ID') }}</th>
                                                                                                            <th>{{ __('admin.Image') }}</th>
                                                                                                            <th>{{ __('admin.Product Name EN') }} </th>
                                                                                                            <th>{{ __('admin.Product Name AR') }} </th>
                                                                                                            <th>{{ __('admin.Product Description EN') }} </th>
                                                                                                            <th>{{ __('admin.Product Description AR') }}</th>
                                                                                                            <th>{{ __('admin.Price') }}</th>
                                                                                                            <th>{{ __('admin.Settings') }}</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @isset($RestaurantsProducts)
                                                                                                            @foreach ($RestaurantsProducts as $Product)
                                                                                                                <tr>
                                                                                                                    <th>{{ $Product->id }}</th>
                                                                                                                    <th><img width="120px" src="{{ asset('uploads/products/'.$Product->image) }}"/></th>
                                                                                                                    <th>{{ $Product->product_name }}</th>
                                                                                                                    <th>{{ $Product->product_name_ar }}</th>
                                                                                                                    <th>{{ $Product->product_description }}</th>
                                                                                                                    <th>{{ $Product->product_description_ar }}</th>
                                                                                                                    <th>{{ $Product->price }}</th>
                                                                                                                    <th>
                                                                                                                        <button data-toggle="modal"
                                                                                                                            data-target="#EditProduct{{ $Product->id }}"
                                                                                                                            class="btn btn-primary">
                                                                                                                            <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                                                                        </button>

                                                                                                                        <a href="{{ route('admin.delete_Products_restaurants',$Product->id) }}" type="button"
                                                                                                                            class="btn btn-danger" >
                                                                                                                            <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                                                                        </a>
                                                                                                                    </th>
                                                                                                                </tr>

                                                                                                                {{-- Start Modal Edit Product --}}
                                                                                                                <div class="modal  fade text-left posation-absolute"
                                                                                                                    id="EditProduct{{ $Product->id }}" tabindex="-1"
                                                                                                                    role="dialog" aria-labelledby="myModalLabel35"
                                                                                                                    aria-hidden="true">
                                                                                                                    <div class="modal-xl modal-dialog" role="document">
                                                                                                                        <div class="modal-content">
                                                                                                                            <div class="modal-header">
                                                                                                                                <h3 class="modal-title"
                                                                                                                                    id="myModalLabel35"> Product
                                                                                                                                    {{ $Product->product_name }}-{{ $Product->product_name_ar }}
                                                                                                                                </h3>
                                                                                                                                <button type="button"
                                                                                                                                    class="close"
                                                                                                                                    data-dismiss="modal"
                                                                                                                                    aria-label="Close">
                                                                                                                                    <span
                                                                                                                                        aria-hidden="true">&times;</span>
                                                                                                                                </button>
                                                                                                                            </div>
                                                                                                                            <form action="{{ route('admin.Edit_And_Update_ProductsRestaurant',$Product->id) }}" method="POST"
                                                                                                                                enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                                                                @csrf
                                                                                                                                <div class="modal-body">
                                                                                                                                    <input type="hidden" name="id_Product" value="{{ $Product->id }}" />

                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Image Product') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="file" name="image" class="form-control required ">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Product Name EN') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" value="{{ $Product->product_name }}" name="product_name" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Product Name AR') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" value="{{ $Product->product_name_ar }}" name="product_name_ar" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>



                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Product Description EN') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <textarea rows="10" name="product_description" maxlength="200"
                                                                                                                                                    minlength="100" id="textarea" class="form-control required"
                                                                                                                                                    placeholder="Product Description EN">{{ $Product->product_description }}</textarea>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Product Description AR') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <textarea rows="10" name="product_description_ar" maxlength="200"
                                                                                                                                                    minlength="100" id="textarea" class="form-control required"
                                                                                                                                                    placeholder="Product Description AR">{{ $Product->product_description_ar }}</textarea>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Price') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="number" value="{{ $Product->price }}" name="price" class="form-control required">
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
                                                                                                            @endforeach
                                                                                                        @endisset
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>

                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- End Modal Restaurant Products --}}

                                                                            {{-- Start Modal Restaurant Chefs --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="Restaurant_Chefs{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog"
                                                                                    role="document">
                                                                                    <div class="modal-content" style="height: 100%;">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Restaurant Chefs') }}
                                                                                                {{ $Restaurant->name }}-{{ $Restaurant->name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="modal-body">
                                                                                            <div class="col-md-12">
                                                                                                <div class="card">
                                                                                                    <div class="card-header bg-info text-white">
                                                                                                        <a data-action="collapse" class="card-title"> {{ __('admin.Add Chefs Restaurant') }}</a>
                                                                                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                                                                                        <div class="heading-elements">
                                                                                                            <ul class="list-inline mb-0">
                                                                                                                <li class="btn btn-danger btn-sm"><a data-action="collapse"><i
                                                                                                                            class="ft-plus"></i></a></li>
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

                                                                                                                    <form action="{{ route('admin.Add_Chefs_Restaurants') }}"
                                                                                                                        method="POST" enctype="multipart/form-data"  >
                                                                                                                        @csrf
                                                                                                                        <input type="hidden" name="Restaurant_id" value="{{ $Restaurant->id }}"/>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Chef Image') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="file" name="image" class="form-control required" required>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Chef Name EN') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="chef_name" class="form-control required" required>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Chef Name AR') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="chef_name_ar" class="form-control required" required>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Specialization EN') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="Specialization" class="form-control required" required>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Specialization AR') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="Specialization_ar" class="form-control required" required>
                                                                                                                                    </div>
                                                                                                                                </div>




                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Facebook') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="url" name="facebook" class="form-control required" required>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Twitter') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="url" name="twitter" class="form-control ">
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Instagram') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="url" name="insta" class="form-control ">
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

                                                                                            <div class="dataTables_scrollBody"
                                                                                                style="position: relative; overflow: auto; width: 99%;">
                                                                                                <table
                                                                                                    class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>{{ __('admin.ID') }}</th>
                                                                                                            <th>{{ __('admin.Chef Image') }}</th>
                                                                                                            <th> {{ __('admin.Chef Name EN') }}</th>
                                                                                                            <th> {{ __('admin.Chef Name AR') }}</th>
                                                                                                            <th> {{ __('admin.Specialization EN') }}</th>
                                                                                                            <th> {{ __('admin.Specialization AR') }}</th>
                                                                                                            <th>{{ __('admin.Settings') }}</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @isset($Restaurant_Chefs)
                                                                                                            @foreach ($Restaurant_Chefs as $Chef)
                                                                                                                <tr>
                                                                                                                    <th>{{ $Chef->id }}</th>
                                                                                                                    <th><img width="120px" src="{{ asset('uploads/Chefs/'.$Chef->image) }}"/></th>
                                                                                                                    <th>{{ $Chef->chef_name }}</th>
                                                                                                                    <th>{{ $Chef->chef_name_ar }}</th>
                                                                                                                    <th>{{ $Chef->Specialization }}</th>
                                                                                                                    <th>{{ $Chef->Specialization_ar }}</th>
                                                                                                                    <th>
                                                                                                                        <a href="{{ $Chef->facebook }}"><i
                                                                                                                            class="fab fa-facebook"></i></a>
                                                                                                                        <a href="{{ $Chef->twitter }}"><i
                                                                                                                                class="fab fa-twitter"></i></a>
                                                                                                                        <a href="{{ $Chef->insta }}"><i class="fab fa-instagram"></i></a>

                                                                                                                    </th>
                                                                                                                    <th>
                                                                                                                        <button data-toggle="modal"
                                                                                                                            data-target="#EditChefs{{ $Chef->id }}"
                                                                                                                            class="btn btn-primary">
                                                                                                                            <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                                                                        </button>

                                                                                                                        <a href="{{ route('admin.delete_Chefs_restaurants',$Chef->id) }}" type="button"
                                                                                                                            class="btn btn-danger" >
                                                                                                                            <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                                                                        </a>
                                                                                                                    </th>
                                                                                                                </tr>

                                                                                                                {{-- Start Modal Edit Chefs --}}
                                                                                                                <div class="modal  fade text-left posation-absolute"
                                                                                                                    id="EditChefs{{ $Chef->id }}" tabindex="-1"
                                                                                                                    role="dialog" aria-labelledby="myModalLabel35"
                                                                                                                    aria-hidden="true">
                                                                                                                    <div class="modal-xl modal-dialog" role="document">
                                                                                                                        <div class="modal-content">
                                                                                                                            <div class="modal-header">
                                                                                                                                <h3 class="modal-title"
                                                                                                                                    id="myModalLabel35"> Chef Name
                                                                                                                                    {{ $Chef->chef_name }}-{{ $Chef->chef_name_ar }}
                                                                                                                                </h3>
                                                                                                                                <button type="button"
                                                                                                                                    class="close"
                                                                                                                                    data-dismiss="modal"
                                                                                                                                    aria-label="Close">
                                                                                                                                    <span
                                                                                                                                        aria-hidden="true">&times;</span>
                                                                                                                                </button>
                                                                                                                            </div>
                                                                                                                            <form action="{{ route('admin.Edit_And_Update_ChefsRestaurant',$Chef->id) }}" method="POST"
                                                                                                                                enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                                                                @csrf
                                                                                                                                <div class="modal-body">
                                                                                                                                    <input type="hidden" name="id_Chef" value="{{ $Chef->id }}" />

                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Chef Image') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="file" name="image" class="form-control ">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="row">

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Chef Name EN') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" value="{{ $Chef->chef_name }}" name="chef_name" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Chef Name AR') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" value="{{ $Chef->chef_name_ar }}" name="chef_name_ar" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>


                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Specialization EN') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" value="{{ $Chef->Specialization }}" name="Specialization" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Specialization AR') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="text" value="{{ $Chef->Specialization_ar }}" name="Specialization_ar" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>




                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Facebook') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="url" value="{{ $Chef->facebook }}" name="facebook" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Twitter') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="url" value="{{ $Chef->twitter }}" name="twitter" class="form-control required">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="col-md-6 form-group">
                                                                                                                                            <h5>{{ __('admin.Instagram') }}
                                                                                                                                                <span class="">*</span>
                                                                                                                                            </h5>
                                                                                                                                            <div class="controls">
                                                                                                                                                <input type="url" value="{{ $Chef->insta }}" name="insta" class="form-control required">
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
                                                                                                            {{-- End Modal Edit Chefs --}}
                                                                                                            @endforeach
                                                                                                        @endisset
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>

                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- End Modal Restaurant Chefs --}}


                                                                            {{-- Start Modal Restaurant Menu --}}
                                                                            <div class="modal  fade text-left"
                                                                                id="Restaurant_Menu{{ $Restaurant->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog"
                                                                                    role="document">
                                                                                    <div class="modal-content" style="height: 100%;">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Restaurant Menu') }}
                                                                                                {{ $Restaurant->name }}-{{ $Restaurant->name_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="modal-body">
                                                                                            <div class="col-md-12">
                                                                                                <div class="card">
                                                                                                    <div class="card-header bg-info text-white">
                                                                                                        <a data-action="collapse" class="card-title">{{ __('admin.Add Menu Restaurant') }}</a>
                                                                                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                                                                                        <div class="heading-elements">
                                                                                                            <ul class="list-inline mb-0">
                                                                                                                <li class="btn btn-danger btn-sm"><a data-action="collapse"><i
                                                                                                                            class="ft-plus"></i></a></li>
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

                                                                                                                    <form action="{{ route('admin.Add_Menu_Restaurants') }}"
                                                                                                                        method="POST" enctype="multipart/form-data" >
                                                                                                                        @csrf
                                                                                                                        <input type="hidden" name="Restaurant_id" value="{{ $Restaurant->id }}"/>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5> {{ __('admin.Image') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="file" name="image" class="form-control" required >
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Name EN') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="product_name" class="form-control" required>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Name AR') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="product_name_ar" class="form-control" required>
                                                                                                                                    </div>
                                                                                                                                </div>



                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Description EN') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <textarea rows="10" name="description" maxlength="200"
                                                                                                                                            minlength="100" id="textarea" class="form-control required"
                                                                                                                                            placeholder="Product Description EN" required></textarea>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Product Description AR') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <textarea rows="10" name="description_ar" maxlength="200"
                                                                                                                                            minlength="100" id="textarea" class="form-control required"
                                                                                                                                            placeholder="Product Description AR" required></textarea>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-md-6 form-group">
                                                                                                                                    <h5>{{ __('admin.Price') }}
                                                                                                                                        <span class="">*</span>
                                                                                                                                    </h5>
                                                                                                                                    <div class="controls">
                                                                                                                                        <input type="text" name="price" class="form-control" required>
                                                                                                                                    </div>
                                                                                                                                </div>


                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label for="eventName3">
                                                                                                                                            {{ __('admin.Select Category') }} :
                                                                                                                                            <span class="danger">*</span>
                                                                                                                                        </label>
                                                                                                                                        <select class="c-select form-control required" required name="menu_cat_id">
                                                                                                                                            <option disabled value="">{{ __('admin.Select Category') }} </option>
                                                                                                                                            @foreach ($Category_Restaurant_Menu as $menuCat)

                                                                                                                                                <option value="{{ $menuCat->id }}">
                                                                                                                                                    {{ $menuCat->name }}
                                                                                                                                                </option>

                                                                                                                                            @endforeach
                                                                                                                                        </select>
                                                                                                                                    </div>


                                                                                                                            </div>
                                                                                                                            <div class="modal-foot">
                                                                                                                                <div class="text-right">
                                                                                                                                    <button type="submit" class="btn btn-success">{{ __('admin.Save') }} <i
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
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="dataTables_scrollBody"
                                                                                                style="position: relative; overflow: auto; width: 99%;">
                                                                                                <table
                                                                                                    class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>{{ __('admin.ID') }}</th>
                                                                                                            <th>{{ __('admin.Image') }}</th>
                                                                                                            <th>{{ __('admin.Product Name EN') }} </th>
                                                                                                            <th>{{ __('admin.Product Name AR') }} </th>
                                                                                                            <th>{{ __('admin.Product Description EN') }}</th>
                                                                                                            <th>{{ __('admin.Product Description AR') }} </th>
                                                                                                            <th>{{ __('admin.Price') }}</th>
                                                                                                            <th>{{ __('admin.Category') }}</th>
                                                                                                            <th>{{ __('admin.Settings') }}</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @isset($Restaurant_Menu)
                                                                                                            @foreach ($Restaurant_Menu as $Menu)
                                                                                                                <tr>
                                                                                                                    <th>{{ $Menu->id }}</th>
                                                                                                                    <th><img width="120px" src="{{ asset('uploads/Menu/'.$Menu->image) }}"/></th>
                                                                                                                    <th>{{ $Menu->product_name }}</th>
                                                                                                                    <th>{{ $Menu->product_name_ar }}</th>
                                                                                                                    <th>{{ $Menu->description }}</th>
                                                                                                                    <th>{{ $Menu->description_ar }}</th>
                                                                                                                    <th>{{ $Menu->price }}</th>
                                                                                                                    <th>{{ $Menu->Category_Name }}</th>

                                                                                                                    <th>
                                                                                                                        <button data-toggle="modal"
                                                                                                                            data-target="#EditMenu{{ $Menu->id }}"
                                                                                                                            class="btn btn-primary">
                                                                                                                            <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                                                                        </button>

                                                                                                                        <a href="{{ route('admin.delete_Menu_restaurants',$Menu->id) }}" type="button"
                                                                                                                            class="btn btn-danger" >
                                                                                                                            <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                                                                        </a>
                                                                                                                    </th>
                                                                                                                    {{-- Start Modal Edit --}}
                                                                                                                <div class="modal  fade text-left posation-absolute" style="z-index:10000"
                                                                                                                id="EditMenu{{ $Menu->id }}" tabindex="-1"
                                                                                                                role="dialog" aria-labelledby="myModalLabel35"
                                                                                                                aria-hidden="true">
                                                                                                                <div class="modal-xl modal-dialog" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h3 class="modal-title"
                                                                                                                                id="myModalLabel35"> Service
                                                                                                                                {{ $Menu->services_name }}-{{ $Menu->services_name_ar }}
                                                                                                                            </h3>
                                                                                                                            <button type="button"
                                                                                                                                class="close"
                                                                                                                                data-dismiss="modal"
                                                                                                                                aria-label="Close">
                                                                                                                                <span
                                                                                                                                    aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                        <form action="{{ route('admin.Edit_And_Update_MenuRestaurant',$Menu->id) }}" method="POST"
                                                                                                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                                                            @csrf
                                                                                                                            <div class="modal-body">
                                                                                                                                <input type="hidden" name="id_Menu" value="{{ $Menu->id }}" />

                                                                                                                                <input type="hidden" name="Restaurant_id" value="{{ $Restaurant->id }}"/>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-6 form-group">
                                                                                                                                        <h5> {{ __('admin.Image') }}
                                                                                                                                            <span class="">*</span>
                                                                                                                                        </h5>
                                                                                                                                        <div class="controls">
                                                                                                                                            <input type="file" name="image" class="form-control"  >
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">

                                                                                                                                    <div class="col-md-6 form-group">
                                                                                                                                        <h5>{{ __('admin.Product Name EN') }}
                                                                                                                                            <span class="">*</span>
                                                                                                                                        </h5>
                                                                                                                                        <div class="controls">
                                                                                                                                            <input type="text" value="{{ $Menu->product_name }}" name="product_name" class="form-control" required>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="col-md-6 form-group">
                                                                                                                                        <h5>{{ __('admin.Product Name AR') }}
                                                                                                                                            <span class="">*</span>
                                                                                                                                        </h5>
                                                                                                                                        <div class="controls">
                                                                                                                                            <input type="text" value="{{ $Menu->product_name_ar }}" name="product_name_ar" class="form-control" required>
                                                                                                                                        </div>
                                                                                                                                    </div>



                                                                                                                                    <div class="col-md-6 form-group">
                                                                                                                                        <h5>{{ __('admin.Product Description EN') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                            <span class="">*</span>
                                                                                                                                        </h5>
                                                                                                                                        <div class="controls">
                                                                                                                                            <textarea rows="10" name="description" maxlength="200"
                                                                                                                                                minlength="100" id="textarea" class="form-control required"
                                                                                                                                                placeholder="Product Description EN" required>{{ $Menu->description }}</textarea>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="col-md-6 form-group">
                                                                                                                                        <h5>{{ __('admin.Product Description AR') }}<code>{{ __('admin.Max Character:200, Min:100') }} </code>
                                                                                                                                            <span class="">*</span>
                                                                                                                                        </h5>
                                                                                                                                        <div class="controls">
                                                                                                                                            <textarea rows="10" name="description_ar" maxlength="200"
                                                                                                                                                minlength="100" id="textarea" class="form-control required"
                                                                                                                                                placeholder="Product Description AR" required>{{ $Menu->description_ar }}</textarea>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="col-md-6 form-group">
                                                                                                                                        <h5>{{ __('admin.Price') }}
                                                                                                                                            <span class="">*</span>
                                                                                                                                        </h5>
                                                                                                                                        <div class="controls">
                                                                                                                                            <input type="text" value="{{ $Menu->price }}" name="price" class="form-control" required>
                                                                                                                                        </div>
                                                                                                                                    </div>


                                                                                                                                    <div class="col-md-6">
                                                                                                                                        <div class="form-group">
                                                                                                                                            <label for="eventName3">
                                                                                                                                                {{ __('admin.Select Category') }} :
                                                                                                                                                <span class="danger">*</span>
                                                                                                                                            </label>
                                                                                                                                            <select class="c-select form-control required" required name="menu_cat_id">
                                                                                                                                                <option disabled value="">{{ __('admin.Select Category') }} </option>
                                                                                                                                                @foreach ($Category_Restaurant_Menu as $menuCat)

                                                                                                                                                    <option @if ($Menu->menu_cat_id == $menuCat->id) selected @endif value="{{ $menuCat->id }}">
                                                                                                                                                        {{ $menuCat->name }}
                                                                                                                                                    </option>

                                                                                                                                                @endforeach
                                                                                                                                            </select>
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
                                                                            {{-- End Modal Restaurant Services --}}

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
            /* white-space: normal !important; */
        }

    </style>
@endsection
<style>
    .app-content .wizard>.actions>ul>li>a[href='#finish'] {
        display: none !important;
    }

</style>
