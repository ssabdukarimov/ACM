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
                    <h3 class="content-header-title">@lang('contests.new_contest')</h3>
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

            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p></p>
                                    </div>
                                    <form class="form form-horizontal" method="post" action="{{ route('contests.store') }}">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-clipboard"></i> @lang('contests.new_contest')</h4>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="name_uz" class="form-control" required placeholder="Musobaqa nomi (Oʻzbek tili)" name="name_uz">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="name_ru" class="form-control" required placeholder="Musobaqa nomi (Rus tili)" name="name_ru">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="name_en" class="form-control" required placeholder="Musobaqa nomi (Ingliz tili)" name="name_en">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="link" class="form-control" required placeholder="Musobaqa linki" name="link">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="datetime-local" id="start" class="form-control" required placeholder="Musobaqa boshlanish vaqti" name="start">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="duration" class="form-control" required placeholder="Musobaqa davomiyligi (min)" name="duration">
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
                </div>
            </section>


        </div>
    </div>
@endsection

@section('page_vendor_js')
    <script src="/app-assets/vendors/js/forms/quill/highlight.min.js"></script>
    <script src="/app-assets/vendors/js/forms/quill/quill.js"></script>
    <script src="/app-assets/vendors/js/forms/quill/katex.min.js"></script>
@endsection

@section('page_js')
    <script src="/app-assets/js/scripts/forms/quill/form-text-editor.min.js"></script>
@endsection
