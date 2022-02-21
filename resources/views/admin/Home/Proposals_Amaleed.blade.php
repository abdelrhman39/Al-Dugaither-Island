@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{ __('admin.HomePage/Proposals') }}</h3>
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
                            <a data-action="collapse" class="card-title">{{ __('admin.Add Proposals Home Page') }}}</a>
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

                                        <form action="{{ route('admin.AddProposalsAmaleedHome') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Proposal EN') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="proposal" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Proposal AR') }}
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" name="proposal_ar" class="form-control">
                                                    </div>
                                                </div>



                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Proposal Description EN') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="10" name="desc_proposals" maxlength="300"
                                                            minlength="100" id="textarea" class="form-control"
                                                            placeholder="Proposal Description EN"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <h5>{{ __('admin.Proposal Description AR') }}<code>{{ __('admin.Max Character:300, Min:100') }}</code>
                                                        <span class="">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <textarea rows="10" name="desc_proposals_ar" maxlength="300"
                                                            minlength="100" id="textarea" class="form-control"
                                                            placeholder="Proposal Description AR"></textarea>
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
                                    <h4 class="card-title">{{ __('admin.HomePage/Proposals') }} </h4>
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
                                                                <th>{{ __('admin.Proposal EN') }}</th>
                                                                <th>{{ __('admin.Proposal AR') }}</th>
                                                                <th>{{ __('admin.Proposal Description EN') }}</th>
                                                                <th>{{ __('admin.Proposal Description AR') }}</th>
                                                                <th>{{ __('admin.Settings') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($ProposalsAmaleed)
                                                                @foreach ($ProposalsAmaleed as $Proposal)
                                                                    <tr>
                                                                        <th>{{ $Proposal->id }}</th>
                                                                        <th>{{ $Proposal->proposal }}</th>
                                                                        <th>{{ $Proposal->proposal_ar }}</th>
                                                                        <th>{{ $Proposal->desc_proposals }}</th>
                                                                        <th>{{ $Proposal->desc_proposals_ar }}</th>
                                                                        <th class="text-nowrap">
                                                                            <button data-toggle="modal"
                                                                                data-target="#EditServ{{ $Proposal->id }}"
                                                                                class="btn btn-primary">
                                                                                <i class="ft-settings icon-left"></i> {{ __('admin.Edit') }}
                                                                            </button>

                                                                            <a href="" type="button"
                                                                                class="btn btn-danger" data-toggle="modal"
                                                                                data-target="#Delete{{ $Proposal->id }}">
                                                                                <i class="ft-x"></i> {{ __('admin.Delete') }}
                                                                            </a>
                                                                            <!-- Start Modal -->
                                                                            {{-- Start Modal Delete --}}
                                                                            <div class="modal animated tada text-left"
                                                                                id="Delete{{ $Proposal->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel43"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title"
                                                                                                id="myModalLabel43">{{ __('admin.Are you sure to delete') }}
                                                                                                {{ $Proposal->proposal }}
                                                                                                -
                                                                                                {{ $Proposal->proposal_ar }}
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
                                                                                            <form action="{{ route('admin.Delete_ProposalsAmaleedHome', $Proposal->id) }}"
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
                                                                                id="EditServ{{ $Proposal->id }}" tabindex="-1"
                                                                                role="dialog" aria-labelledby="myModalLabel35"
                                                                                aria-hidden="true">
                                                                                <div class="modal-xl modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h3 class="modal-title"
                                                                                                id="myModalLabel35"> {{ __('admin.Edit') }}
                                                                                                {{ $Proposal->proposal }}-{{ $Proposal->proposal_ar }}
                                                                                            </h3>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form action="{{ route('admin.Edit_And_Update_ProposalsAmaleedHome',$Proposal->id) }}" method="POST"
                                                                                            enctype="multipart/form-data" class="form-horizontal" novalidate>
                                                                                            @csrf
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="id_header" value="{{ $Proposal->id }}" />

                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Proposal EN') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" name="proposal"
                                                                                                                value="{{ $Proposal->proposal }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Proposal AR') }}
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <input type="text" name="proposal_ar"
                                                                                                                value="{{ $Proposal->proposal_ar }}"
                                                                                                                class="form-control">
                                                                                                        </div>
                                                                                                    </div>



                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Proposal Description EN') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <textarea rows="10" name="desc_proposals" maxlength="300" minlength="100"
                                                                                                                id="textarea" class="form-control"
                                                                                                                placeholder="Proposal Description EN">{{ $Proposal->desc_proposals }}</textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <h5>{{ __('admin.Proposal Description AR') }}<code>{{ __('admin.Max Character:300, Min:100') }} </code>
                                                                                                            <span class="">*</span>
                                                                                                        </h5>
                                                                                                        <div class="controls">
                                                                                                            <textarea rows="10" name="desc_proposals_ar" maxlength="300" minlength="100"
                                                                                                                id="textarea" class="form-control"
                                                                                                                placeholder="Proposal Description AR">{{ $Proposal->desc_proposals_ar }}</textarea>
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
