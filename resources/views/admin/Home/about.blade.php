@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ ('admin.HomePage / About') }}}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">{{ __('admin.HomePage') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{ __('home.About us') }}</a>
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
                                    <h4 class="card-title">{{ __('admin.Edit About Home Page') }}</h4>
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
                                                <form action="{{ route('admin.AboutHome_update') }}" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                    @csrf
                                                    <input type="hidden" name="id_header" value="{{ $AboutHome->id }}" />

                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Logo Company') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <img src="{{ url('uploads/about/'.$AboutHome->logo_company) }}" width="100%" height="250px"/>
                                                                <input type="file"  name="logo_company" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Text Head En') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="text_head"
                                                                    value="{{ $AboutHome->text_head }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Text Head AR') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input type="text" name="text_head_ar"
                                                                    value="{{ $AboutHome->text_head_ar }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Text More Question EN') }}<code>{{ __('admin.Max Character:500, Min:200') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="text_more" maxlength="500" minlength="200"
                                                                    id="textarea" class="form-control"
                                                                    placeholder="Text More">{{ $AboutHome->text_more }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Text More Question AR') }}<code>{{ __('admin.Max Character:500, Min:200') }}</code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="text_more_ar" maxlength="500" minlength="200"
                                                                    id="textarea" class="form-control"
                                                                    placeholder="Text More">{{ $AboutHome->text_more_ar }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (1) Head EN') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv1_head" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv1_head }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (1) Head AR') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv1_head_ar" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv1_head_ar }}</textarea>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (1) Text EN') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv1_text" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv1_text }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (1) Text AR') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv1_text_ar" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv1_text_ar }}</textarea>
                                                            </div>
                                                        </div>




                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (2) Head EN') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv2_head" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv2_head }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (2) Head AR') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv2_head_ar" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv2_head_ar }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (2) Text EN') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv2_text" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv2_text }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (2) Text AR') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv2_text_ar" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv2_text_ar }}</textarea>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (3) Head EN') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv3_head" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv3_head }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (3) Head AR') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv3_head_ar" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv3_head_ar }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (3) Text EN') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv3_text" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv3_text }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Service (3) Text AR') }}<code>{{ __('admin.Max Character:50, Min:10') }} </code>
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <textarea rows="10" name="serv3_text_ar" maxlength="100"
                                                                    minlength="10" id="textarea" class="form-control"
                                                                    placeholder="Text Under Question">{{ $AboutHome->serv3_text_ar }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Image') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <img src="{{ url('uploads/about/'.$AboutHome->image) }}" width="100%" height="250px"/>
                                                                <input type="file"  name="image"  class="form-control"
                                                                    placeholder="Image">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <h5>{{ __('admin.Vedio Link (Youtube)') }}
                                                                <span class="">*</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <iframe controls muted width="100%" height="250px" src="{{ $AboutHome->vedio_link }}"></iframe>
                                                                <input type="url"  name="vedio_link" value="{{ $AboutHome->vedio_link }}" class="form-control"
                                                                    placeholder="vedio link">
                                                            </div>
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
                        </div>
                </section>
                <!-- Input Validation end -->

            </div>
        </div>
    </div>

@endsection
