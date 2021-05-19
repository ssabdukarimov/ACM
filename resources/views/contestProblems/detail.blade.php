@extends('layouts.app')

@section('nav')
    @include('layouts.nav')
@endsection

@section('menu')
    @include('layouts.menu')
@endsection

@section('page_css')

@endsection

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">

        <section class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-1">
                    <h3 class="content-header-title">@lang('left_sidebar.problems')</h3>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('left_sidebar.home')</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('problems.index') }}">@lang('left_sidebar.problems')</a>
                            </li>
                            <li class="breadcrumb-item">{{ $problem->code }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- App invoice wrapper -->
            <section class="app-invoice-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-8 col-12 printable-content">
                        <!-- using a bootstrap card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body p-2">
                                <!-- card-header -->
                                <div class="invoice-logo-title row py-2">
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                                        <h2 class="text-primary">{{ $problem->code }}.
                                            @if(\Session::get('locale') == 'uz')
                                                {{ $problem->problem->name_uz }}
                                            @elseif (\Session::get('locale') == 'ru')
                                                {{ $problem->problem->name_ru }}
                                            @else
                                                {{ $problem->problem->name_en }}
                                            @endif
                                        </h2>
                                        <span>{{ $problem->problem->user->fname }} {{ $problem->problem->user->lname }}</span>
                                    </div>
                                </div>
                                <div class="card-header px-0">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                            <span class="invoice-id font-weight-bold">@lang('problems.time_limit')</span>
                                            <span>{{ $problem->problem->time }} @lang('problems.ms')</span>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-xl-8">
                                            <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                <span class="font-weight-bold no-wrap">@lang('problems.memory_limit') </span>
                                                <span>{{ $problem->problem->memory }} @lang('problems.mb')</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- invoice logo and title -->
                                <hr>
                                <!-- invoice address and contacts -->
                                <div class="row invoice-adress-info py-2">
                                    <div class="col-12 mt-1 from-info">
                                        @if(\Session::get('locale') == 'uz')
                                            {{ $problem->problem->body_uz }}
                                        @elseif (\Session::get('locale') == 'ru')
                                            {{ $problem->problem->body_ru }}
                                        @else
                                            {{ $problem->problem->body_en }}
                                        @endif
                                    </div>
                                </div>

                                <!--product details table -->
                                <hr>
                                <!-- invoice total -->
                                <div class="invoice-total py-2">
                                    <div class="row">
                                        <div class="col-4 col-sm-6 mt-75">
                                            <p> @lang('problems.input')</p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-1 from-info">
                                        @if(\Session::get('locale') == 'uz')
                                            {{ $problem->problem->input_uz }}
                                        @elseif (\Session::get('locale') == 'ru')
                                            {{ $problem->problem->input_ru }}
                                        @else
                                            {{ $problem->problem->input_en }}
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="invoice-total py-2">
                                    <div class="row">
                                        <div class="col-4 col-sm-6 mt-75">
                                            <p> @lang('problems.output')</p>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-1 from-info">
                                        @if(\Session::get('locale') == 'uz')
                                            {{ $problem->problem->output_uz }}
                                        @elseif (\Session::get('locale') == 'ru')
                                            {{ $problem->problem->output_ru }}
                                        @else
                                            {{ $problem->problem->output_en }}
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="invoice-total py-2">
                                    <div class="row">
                                        <div class="col-4 col-sm-6 mt-75">
                                            <p> @lang('problems.example')</p>
                                        </div>
                                    </div>
                                    <div class="row invoice-adress-info py-2">
                                        <div class="col-6 mt-1 from-info">
                                            <div class="col-4 col-sm-6 mt-75">
                                                <p> @lang('problems.input')</p>
                                            </div>
                                            {{ $problem->problem->input_example }}
                                        </div>
                                        <div class="col-6 mt-1 from-info">
                                            <div class="col-4 col-sm-6 mt-75">
                                                <p> @lang('problems.output')</p>
                                            </div>
                                            {{ $problem->problem->output_example }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="invoice-total py-2">
                                    <form class="form form-horizontal" method="post" action="{{ route('contestProblems.task') }}">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-check"></i> @lang('problems.submit')</h4>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <select id="name_uz" class="form-control" required name="name_uz">
                                                        @foreach($languages as $language)
                                                            <option value="{{ $language->code }}">{{ $language->name }}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea  id="name_ru" class="form-control" required rows="15" name="name_ru"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- buttons section -->
                    <div class="col-xl-3 col-md-4 col-12 action-btns">
                        <div class="card">
                            <div class="card-body p-2">
                                <a href="{{ route('contests.show', $problem->contest_id) }}" class="btn btn-primary btn-block mb-1"> <i class="fa fa-tasks"></i> <span class="menu-title" data-i18n="Todo Application">@lang('left_sidebar.problems') </a>
                                <a href="#" class="btn btn-info btn-block mb-1 print-invoice"> <i class="feather icon-check mr-25 common-size"></i> @lang('left_sidebar.attempts')</a>
                                <a href="#" class="btn btn-success btn-block mb-1"><i class="feather icon-credit-card mr-25 common-size"></i> @lang('left_sidebar.standing')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection
