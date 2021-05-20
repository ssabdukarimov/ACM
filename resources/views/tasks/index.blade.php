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
                    <h3 class="content-header-title">@lang('left_sidebar.attempts')</h3>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('left_sidebar.home')</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('tasks.index') }}">@lang('left_sidebar.attempts')</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <section class="app-invoice-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-8 col-12 printable-content">
                        <!-- using a bootstrap card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body p-2">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>User name</th>
                                            <th>Problem name</th>
                                            <th>Language</th>
                                            <th>Ball</th>
                                            <th>Holati</th>
                                            <th>Vaqti</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(\Session::get('locale') == 'uz')
                                            @foreach($tasks as $key => $task)
                                                <tr>
                                                    <td>{{ $task->user->fname }} {{ $task->user->lname }}</td>
                                                    <td>{{ $task->problem->name_uz }}</td>
                                                    <td>{{ $task->language->name }}</td>
                                                    <td>{{ $task->point }}</td>
                                                    <td>{{ $task->status->name_uz }}</td>
                                                    <td>{{ $task->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        @elseif(\Session::get('locale') == 'ru')

                                        @else

                                        @endif

                                        </tbody>
                                    </table>
                                    {{ $tasks->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-12 action-btns">
                        <div class="card">
                            <div class="card-body p-2">
                                <a href="{{ route('contests.index') }}" class="btn btn-primary btn-block mb-1"> <i class="fa fa-tasks"></i> <span class="menu-title" data-i18n="Todo Application">@lang('left_sidebar.contests') </a>
                                <a href="{{ route('tasks.index') }}" class="btn btn-info btn-block mb-1 print-invoice"> <i class="feather icon-check mr-25 common-size"></i> @lang('left_sidebar.attempts')</a>
                                <a href="#" class="btn btn-success btn-block mb-1"><i class="feather icon-credit-card mr-25 common-size"></i> @lang('left_sidebar.standing')</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
