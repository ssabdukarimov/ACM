@extends('layouts.app')

@section('nav')
    @include('layouts.nav')
@endsection

@section('menu')
    @include('layouts.menu')
@endsection

@section('page_css')
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-callout.min.css">
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            @if(\Illuminate\Support\Facades\Auth::check() and Auth::user()->admin == 1)
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('problems.create') }}"  class="btn btn-primary mb-2" id="add-kanban">
                            <i class='feather icon-plus-square mr-50'></i> Add New Board
                        </a>
                        <div id="kanban-app"></div>
                    </div>
                </div>

            @endif
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
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">

                            </div>
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
                                        @foreach($problems as $key => $problem)
                                            <tr>
                                                <th scope="row">{{ ($problems->currentpage()-1) * $problems->perpage() + $key + 1 }}</th>
                                                <td><a href="{{ route('problems.show', $problem->id) }}">{{ $problem->code }}. {{ $problem->name_uz }}</a></td>
                                                <td>{{ $problem->point }}</td>
                                            </tr>
                                        @endforeach
                                    @elseif(\Session::get('locale') == 'ru')
                                        @foreach($problems as $key => $problem)
                                            <tr>
                                                <th scope="row">{{ ($problems->currentpage()-1) * $problems->perpage() + $key + 1 }}</th>
                                                <td><a href="{{ route('problems.show', $problem->id) }}">{{ $problem->code }}. {{ $problem->name_ru }}</a></td>
                                                <td>{{ $problem->point }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($problems as $key => $problem)
                                            <tr>
                                                <th scope="row">{{ ($problems->currentpage()-1) * $problems->perpage() + $key + 1 }}</th>
                                                <td><a href="{{ route('problems.show', $problem->id) }}">{{ $problem->code }}. {{ $problem->name_en }}</a></td>
                                                <td>{{ $problem->point }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                                {{ $problems->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
