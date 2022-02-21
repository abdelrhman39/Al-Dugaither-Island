@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block"> {{ __('admin.Fitness Room') }} </h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="btn btn-info" target="_blank" href="{{ url('Fitnes_Room') }}">{{ __('admin.Show Site Fitness Room') }} <i class="far fa-eye"></i></a>
                                </li>

                            </ol>
                        </div>

                    </div>
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                </div>
            </div>
            <div class="content-body">

                {{-- Start Header Fitness Room --}}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.Edit ( Header ) Fitness Room') }} </a>
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

                                        <form action="{{ route('admin.Fitness_Room_headr_update') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <img width="150px" src="{{ asset('uploads/fitness_room/'.$Fitness_Room_Header->image) }}">
                                                        <h5>{{ __('admin.Fitness Room Image') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->fitness_room_name }}" name="fitness_room_name" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->fitness_room_name_ar }}" name="fitness_room_name_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Head Animation 1 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->text_head_anim1 }}" name="text_head_anim1" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Head Animation 1 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->text_head_anim1_ar }}" name="text_head_anim1_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Head Animation 2 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->text_head_anim2 }}" name="text_head_anim2" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Head Animation 2 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->text_head_anim2_ar }}" name="text_head_anim2_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Head Animation 3 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->text_head_anim3 }}" name="text_head_anim3" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Head Animation 3 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Header->text_head_anim3_ar }}" name="text_head_anim3_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Description EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="6" name="text_more" maxlength="80" required class="form-control">
                                                            {{ $Fitness_Room_Header->text_more }}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Description AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="6" name="text_more_ar" maxlength="80" required class="form-control">
                                                            {{ $Fitness_Room_Header->text_more_ar }}
                                                        </textarea>
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">{{ __('admin.Update') }} <i
                                                        class="la la-thumbs-o-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">{{__('admin.Reset')}} <i
                                                        class="la la-refresh position-right"></i></button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- End Header Fitness Room --}}




                {{-- Start Section 2 Fitness Room --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.Edit ( Section 2 ) Fitness Room') }} </a>
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

                                        <form action="{{ route('admin.Fitness_Room_section2_update') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <img width="130px" src="{{ asset('uploads/fitness_room/'.$Fitness_Room_Section2->image) }}">
                                                        <h5>{{ __('admin.Image_Section2') }}
                                                            <span class="">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Text Head EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->text_head }}" name="text_head" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Text Head AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->text_head_ar }}" name="text_head_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Description  EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->text_more }}" name="text_more" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text Description  AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->text_more_ar }}" name="text_more_ar" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 1 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv1_text }}" name="serv1_text" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 1 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv1_text_ar }}" name="serv1_text_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 2 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv2_text }}" name="serv2_text" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 2 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv2_text_ar }}" name="serv2_text_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 3 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv3_text }}" name="serv3_text" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 3 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv3_text_ar }}" name="serv3_text_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 4 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv4_text }}" name="serv4_text" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 4 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv4_text_ar }}" name="serv4_text_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>



                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 5 EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv5_text }}" name="serv5_text" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.check 5 AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_Section2->serv5_text_ar }}" name="serv5_text_ar" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-success">{{ __('admin.Update') }} <i
                                                        class="la la-thumbs-o-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger">{{__('admin.Reset')}} <i
                                                        class="la la-refresh position-right"></i></button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- End Section 2 Fitness Room --}}




                {{-- Start Services Fitness Room --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Add Services ) Fitness Room') }} </a>
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

                                        <form action="{{ route('admin.Fitness_Room_Services_Add') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Icon') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="icon" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="text_head" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="text_head_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Description EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="text_desc" required class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Service Description AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="text_desc_ar" required class="form-control"></textarea>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.( Show All Services ) Fitness Room') }} </a>
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
                                                        <th>{{ __('admin.Service Name EN') }}</th>
                                                        <th>{{ __('admin.Service Name AR') }}</th>
                                                        <th>{{ __('admin.Service Description EN') }}</th>
                                                        <th>{{ __('admin.Service Description AR') }}</th>
                                                        <th>{{ __('admin.Settings') }} </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($Fi_Room_Services)
                                                        @foreach ($Fi_Room_Services as $Service)
                                                            <tr>
                                                                <th>{{ $Service->id }}</th>
                                                                <th><i class="{{ $Service->icon }}"></i></th>
                                                                <th>{{ $Service->text_head }}</th>
                                                                <th>{{ $Service->text_head_ar }}</th>
                                                                <th>{{ $Service->text_desc }}</th>
                                                                <th>{{ $Service->text_desc_ar }}</th>
                                                                <th class="text-nowrap">

                                                                    <a href="{{ route('admin.Fitness_Room_Services_delete',$Service->id) }}" type="button"
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


                {{-- End Services Fitness Room --}}




                {{-- Start Levels Fitness Room --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Add Level ) Fitness Room') }}</a>
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

                                        <form action="{{ route('admin.Fitness_Room_Levels_Add') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Image') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Level Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="text_head" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Level Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="text_head_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Level Description EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="text_desc" required class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Level Description AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="text_desc_ar" required class="form-control"></textarea>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.( Show All Levels ) Fitness Room') }} </a>
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
                                                        <th>{{ __('admin.Id') }}</th>
                                                        <th>{{ __('admin.Image') }} </th>
                                                        <th>{{ __('admin.Level Name EN') }}</th>
                                                        <th>{{ __('admin.Level Name AR') }}</th>
                                                        <th>{{ __('admin.Level Description EN') }}</th>
                                                        <th>{{ __('admin.Level Description AR') }}</th>
                                                        <th>{{ __('admin.Settings') }} </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($Fitness_Room_Levels)
                                                        @foreach ($Fitness_Room_Levels as $Level)
                                                            <tr>
                                                                <th>{{ $Level->id }}</th>
                                                                <th><img width="120px" src="{{ asset('uploads/fitness_room/'.$Level->image) }}"></th>
                                                                <th>{{ $Level->text_head }}</th>
                                                                <th>{{ $Level->text_head_ar }}</th>
                                                                <th>{{ $Level->text_desc }}</th>
                                                                <th>{{ $Level->text_desc_ar }}</th>
                                                                <th class="text-nowrap">

                                                                    <a href="{{ route('admin.Fitness_Room_Levels_delete',$Level->id) }}" type="button"
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


                {{-- End Levels Fitness Room --}}




                {{-- Start Stories Fitness Room --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.( Add Stories ) Fitness Room') }} </a>
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

                                        <form action="{{ route('admin.Fitness_Room_Stories_Add') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.User Name EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="user_name" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.User Name AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="user_name_ar" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Image Profile User') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="file" name="user_img" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text View EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="text_view" required class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Text View AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="text_view_ar" required class="form-control"></textarea>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.( Show All Stories ) Fitness Room') }} </a>
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
                                                        <th>{{ __('admin.Image') }}</th>
                                                        <th>{{ __('admin.User Name AR') }} </th>
                                                        <th>{{ __('admin.User Name EN') }}</th>
                                                        <th>{{ __('admin.Text View EN') }}</th>
                                                        <th>{{ __('admin.Text View AR') }}</th>
                                                        <th>{{ __('admin.Settings') }} </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($Fitness_Room_Stories)
                                                        @foreach ($Fitness_Room_Stories as $Stories)
                                                            <tr>
                                                                <th>{{ $Stories->id }}</th>
                                                                <th><img width="120px" src="{{ asset('uploads/fitness_room/'.$Stories->user_img) }}"></th>
                                                                <th>{{ $Stories->user_name }}</th>
                                                                <th>{{ $Stories->user_name_ar }}</th>
                                                                <th>{{ $Stories->text_view }}</th>
                                                                <th>{{ $Stories->text_view_ar }}</th>
                                                                <th class="text-nowrap">

                                                                    <a href="{{ route('admin.Fitness_Room_Stories_delete',$Stories->id) }}" type="button"
                                                                        class="btn btn-danger">
                                                                        <i class="ft-x"></i> Delete
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


                {{-- End Stories Fitness Room --}}




                {{-- Start Contact Us Fitness Room --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <a data-action="collapse" class="card-title">{{ __('admin.Edit ( Contact Us ) Fitness Room') }} </a>
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

                                        <form action="{{ route('admin.Fitness_Room_ContactUs_update') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf



                                            <div class="row">

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Site Description EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text"  name="site_description" required class="form-control">
                                                            {{ $Fitness_Room_ContactUs->site_description }}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Site Description AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea type="text" name="site_description_ar" required class="form-control">
                                                            {{ $Fitness_Room_ContactUs->site_description_ar }}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Fitness Room Phone Number') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_ContactUs->phone }}" name="phone" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('home.Email') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_ContactUs->email }}" name="email" required class="form-control">
                                                    </div>
                                                </div>



                                                <div class="col-md-6 form-group">
                                                    <h5> {{ __('admin.Facebook') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_ContactUs->facebook }}" name="facebook" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5> {{ __('admin.Twitter') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_ContactUs->twitter }}" name="twitter" maxlength="50" required class="form-control">
                                                    </div>
                                                </div>


                                                <div class="col-md-6 form-group">
                                                    <h5> {{ __('admin.Instagram') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{ $Fitness_Room_ContactUs->insta }}" name="insta" maxlength="50" required class="form-control">
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


                {{-- End Contact Us Fitness Room --}}


            </div>
        </div>
    </div>

@endsection
