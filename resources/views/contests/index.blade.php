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
                        <a href="{{ route('contests.create') }}"  class="btn btn-primary mb-2" id="add-kanban">
                            <i class='feather icon-plus-square mr-50'></i> Musobaqa yaratish
                        </a>
                        <div id="kanban-app"></div>
                    </div>
                </div>
            @endif
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
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">

                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('contests.name')</th>
                                        <th>@lang('contests.pcount')</th>
                                        <th>@lang('contests.mball')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(\Session::get('locale') == 'uz')
                                        @foreach($contests as $key => $contest)
                                            <tr>
                                                <th scope="row">{{ ($contests->currentpage()-1) * $contests->perpage() + $key + 1 }}</th>
                                                <td><a href="{{ route('contests.show', $contest->id) }}">{{ $contest->name_uz }}</a></td>
                                                <td>{{ $contestProblems->where('contest_id', $contest->id)->count() }}</td>
                                                <td>{{ $contestProblems->where('contest_id', $contest->id)->sum('point') }}</td>
                                            </tr>
                                        @endforeach
                                    @elseif(\Session::get('locale') == 'ru')
                                        @foreach($contests as $key => $contest)
                                            <tr>
                                                <th scope="row">{{ ($contests->currentpage()-1) * $contests->perpage() + $key + 1 }}</th>
                                                <td><a href="{{ route('contests.show', $contest->id) }}">{{ $contest->name_ru }}</a></td>
                                                <td>{{ $contestProblems->where('contest_id', $contest->id)->count() }}</td>
                                                <td>{{ $contestProblems->where('contest_id', $contest->id)->sum('point') }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($contests as $key => $contest)
                                            <tr>
                                                <th scope="row">{{ ($contests->currentpage()-1) * $contests->perpage() + $key + 1 }}</th>
                                                <td><a href="{{ route('contests.show', $contest->id) }}">{{ $contest->name_en }}</a></td>
                                                <td>{{ $contestProblems->where('contest_id', $contest->id)->count() }}</td>
                                                <td>{{ $contestProblems->where('contest_id', $contest->id)->sum('point') }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                                {{ $contests->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
