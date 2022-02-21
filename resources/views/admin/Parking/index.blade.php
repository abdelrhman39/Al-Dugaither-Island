@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block"> {{ __('admin.Parking') }}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="btn btn-info" target="_blank" href="{{ url('_Parking') }}">{{ __('admin.Show Site Parking') }} <i class="far fa-eye"></i></a>
                                </li>

                            </ol>
                        </div>

                    </div>
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                </div>
            </div>
            <div class="content-body">




                {{-- Start  Parking --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Add Parking ) Header Slider') }} </a>
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

                                        <form action="{{ route('admin.Parking_Add') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="parking_name" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="parking_name_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Description EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="parking_desc" required class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Description AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="parking_desc_ar" required class="form-control"></textarea>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Image') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="file" name="parking_img" required class="form-control">
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


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Show All Parking ) Parking') }} </a>
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
                                        <div class="dataTables_scrollBody"
                                            style="position: relative; overflow: auto; width: 100%;">
                                            <table
                                                class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('admin.ID') }}</th>
                                                        <th>{{ __('admin.Image') }} </th>
                                                        <th>{{ __('admin.Parking Name EN') }}</th>
                                                        <th>{{ __('admin.Parking Name AR') }}</th>
                                                        <th>{{ __('admin.Parking Description EN') }}</th>
                                                        <th>{{ __('admin.Parking Description AR') }}</th>
                                                        <th>{{ __('admin.Settings') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($Parking)
                                                        @foreach ($Parking as $Park)
                                                            <tr>
                                                                <th>{{ $Park->id }}</th>
                                                                <th><img width="120px" src="{{ asset('uploads/Parking/'.$Park->parking_img) }}"></th>
                                                                <th>{{ $Park->parking_name }}</th>
                                                                <th>{{ $Park->parking_name_ar }}</th>
                                                                <th>{{ $Park->parking_desc }}</th>
                                                                <th>{{ $Park->parking_desc_ar }}</th>
                                                                <th class="text-nowrap">

                                                                    <a href="{{ route('admin.Parking_delete',$Park->id) }}" type="button"
                                                                        class="btn btn-danger">
                                                                        <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                    </a>
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


                {{-- End  Parking --}}








                {{-- Start Services Parking --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Add Services Parking )') }} </a>
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

                                        <form action="{{ route('admin.Parking_Services_Add') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Services Icon') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="icon" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Services Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="serv_name" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Services Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="serv_name_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Services Description EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="serv_desc" required class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Parking Services Description AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="serv_desc_ar" required class="form-control"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">{{ __('admin.Save') }} <i
                                                        class="la la-thumbs-o-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">{{ __('admin.Update') }} <i
                                                        class="la la-refresh position-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Show All Services Parking ) Parking') }} </a>
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
                                        <div class="dataTables_scrollBody"
                                            style="position: relative; overflow: auto; width: 100%;">
                                            <table
                                                class="table display nowrap table-striped table-bordered scroll-horizontal dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('admin.ID') }}</th>
                                                        <th>{{ __('admin.Icon') }} </th>
                                                        <th>{{ __('admin.Parking Services Name EN') }}</th>
                                                        <th>{{ __('admin.Parking Services Name AR') }}</th>
                                                        <th>{{ __('admin.Parking Services Description EN') }}</th>
                                                        <th>{{ __('admin.Parking Services Description AR') }}</th>
                                                        <th>{{ __('admin.Settings') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($Parking_Services)
                                                        @foreach ($Parking_Services as $Service)
                                                            <tr>
                                                                <th>{{ $Service->id }}</th>
                                                                <th><i class="{{ $Service->icon }}"></i></th>
                                                                <th>{{ $Service->serv_name }}</th>
                                                                <th>{{ $Service->serv_name_ar }}</th>
                                                                <th>{{ $Service->serv_desc }}</th>
                                                                <th>{{ $Service->serv_desc_ar }}</th>
                                                                <th class="text-nowrap">

                                                                    <a href="{{ route('admin.Parking_Services_delete',$Service->id) }}" type="button"
                                                                        class="btn btn-danger">
                                                                        <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                    </a>
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


                {{-- End Services Parking --}}







                {{-- Start Parking About US --}}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.Edit ( About Us  ) Parking') }} </a>
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

                                        <form action="{{ route('admin.Parking_AboutUs_update') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                                <div class="row">

                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('admin.About Us Description EN') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <textarea rows="6" name="about_desc" required class="form-control">
                                                                {{ $Parking_About_Us->about_desc }}
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('admin.About Us Description AR') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <textarea rows="6" name="about_desc_ar" required class="form-control">
                                                                {{ $Parking_About_Us->about_desc_ar }}
                                                            </textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6 form-group">
                                                        {!! $Parking_About_Us->video !!}
                                                        <h5>{{ __('admin.video Parking About_Us') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" value="{{ $Parking_About_Us->video }}" name="video" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <img width="12px" src="{{ asset('uplaods/Parking/'.$Parking_About_Us->image_video) }}"/>
                                                        <h5>{{ __('admin.Image Video Parking') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="file" value="{{ $Parking_About_Us->video }}" name="image_video" class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('admin.Facebook') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" value="{{ $Parking_About_Us->facebook }}" name="facebook" required class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('admin.Twitter') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" value="{{ $Parking_About_Us->twitter }}" name="twitter" required class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('admin.Instagram') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" value="{{ $Parking_About_Us->insta }}" name="insta" required class="form-control">
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('home.Email') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="email" value="{{ $Parking_About_Us->email }}" name="email" required class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <h5>{{ __('home.Phone') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" value="{{ $Parking_About_Us->phone }}" name="phone" required class="form-control">
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">{{ __('admin.Update') }} <i
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

                {{-- End Parking About US --}}







            </div>
        </div>
    </div>

@endsection
