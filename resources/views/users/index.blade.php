@extends('layouts.app')

@section('nav')
    @include('layouts.nav')
@endsection

@section('menu')
    @include('layouts.menu')
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-1">
                    <h3 class="content-header-title">@lang('left_sidebar.users')</h3>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('left_sidebar.home')</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">@lang('left_sidebar.users')</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">

                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('users.user_name')</th>
                                        <th>@lang('users.region')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(\Session::get('locale') == 'uz')
                                        @foreach($users as $key => $user)
                                            <tr>
                                                <th scope="row">{{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</th>
                                                <td>{{ $user->fname }} {{ $user->lname }}</td>
                                                <td>{{ $user->region->name_uz }}</td>
                                            </tr>
                                        @endforeach
                                    @elseif(\Session::get('locale') == 'ru')
                                        @foreach($users as $key => $user)
                                            <tr>
                                                <th scope="row">{{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</th>
                                                <td>{{ $user->fname }} {{ $user->lname }}</td>
                                                <td>{{ $user->region->name_ru }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($users as $key => $user)
                                            <tr>
                                                <th scope="row">{{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</th>
                                                <td>{{ $user->fname }} {{ $user->lname }}</td>
                                                <td>{{ $user->region->name_en }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
