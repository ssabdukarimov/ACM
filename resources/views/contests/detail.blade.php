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
                    <h3 class="content-header-title">@lang('left_sidebar.contests')</h3>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('left_sidebar.home')</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('contests.index') }}">@lang('left_sidebar.contests')</a>
                            </li>
                            <li class="breadcrumb-item">
                                @if(\Session::get('locale') == 'uz')
                                    {{ $contest->name_uz }}
                                @elseif (\Session::get('locale') == 'ru')
                                    {{ $contest->name_ru }}
                                @else
                                    {{ $contest->name_en }}
                                @endif
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
                                        <h2 class="text-primary">
                                            @if(\Session::get('locale') == 'uz')
                                                {{ $contest->name_uz }}
                                            @elseif (\Session::get('locale') == 'ru')
                                                {{ $contest->name_ru }}
                                            @else
                                                {{ $contest->name_en }}
                                            @endif
                                        </h2>
                                        <span>{{ $contest->user->fname }} {{ $contest->user->lname }}</span>
                                    </div>
                                </div>
                                <div class="card-header px-0">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                            <span class="invoice-id font-weight-bold">@lang('contests.start')</span>
                                            <span>{{ Carbon\Carbon::parse($contest->start)->format('H:i:s d-m-Y') }} </span>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-xl-8">
                                            <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                <span class="font-weight-bold no-wrap">@lang('contests.countproblems') </span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                            <span class="font-weight-bold no-wrap">@lang('contests.end') </span>
                                            <span>{{ Carbon\Carbon::parse($contest->start)->addMinute($contest->duration)->format('H:i:s d-m-Y') }}</span>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-xl-8">
                                            <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                <span class="font-weight-bold no-wrap">@lang('contests.pointsum') </span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- invoice logo and title -->
                                <hr>
                                <!-- invoice address and contacts -->
                                @if(Carbon\Carbon::now() < $contest->start)
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h1 class="text-center">Nazorat ishi boshlanishiga</h1>
                                                    <div id="CountDown"  class="col-12  col-lg-6 offset-lg-3"  data-date="<?php echo $contest->start; ?>"></div>
                                                    <script>
                                                        function countdownComplete(unit, value, total){
                                                            if(total <= 0){
                                                                window.location.reload(true);
                                                            }
                                                        }
                                                        $("#CountDown").TimeCircles({
                                                            "animation": "smooth",
                                                            "bg_width": 0.1,
                                                            "fg_width": 0.05,
                                                            "circle_bg_color": "#60686F"
                                                        }).addListener(countdownComplete);
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('problems.name')</th>
                                            <th>@lang('problems.point')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(\Session::get('locale') == 'uz')
                                            @foreach($contestProblems as $key => $problem)
                                                <tr>
                                                    <th scope="row">{{ $problem->code }}</th>
                                                    <td><a href="{{ route('contestProblems.show', $problem->id) }}">{{ $problem->problem->name_uz }}</a></td>
                                                    <td>{{ $problem->point }}</td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>

                                </div>
                                    @endif
                            </div>
                        </div>
                    </div>

                    <!-- buttons section -->
                    <div class="col-xl-3 col-md-4 col-12 action-btns">
                        <div class="card">
                            <div class="card-body p-2">
                                <a href="{{ route('contests.show', $contest->id) }}" class="btn btn-primary btn-block mb-1"> <i class="fa fa-tasks"></i> <span class="menu-title" data-i18n="Todo Application">@lang('left_sidebar.problems') </a>
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
