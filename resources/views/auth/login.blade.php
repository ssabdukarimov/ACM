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
            </div>
            <div class="content-body"><section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="text-center">
                                        <h2 class="brand-text">Olympics</h2>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>@lang('login.login')</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="POST" class="form-horizontal form-simple" action="{{ route('login') }}" novalidate>
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="@lang('login.email')" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="@lang('login.password')" required>
                                                <div class="form-control-position"> <i class="fa fa-key"></i> </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> @lang('login.remember')</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 text-center text-sm-right"><a href="#"
                                                                                                          class="card-link">@lang('login.forgot')</a></div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                                    class="feather icon-unlock"></i> @lang('login.login')</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="">
                                        <p class="float-sm-right text-center m-0">@lang('login.new') <a href="{{ route('register') }}"
                                                                                                   class="card-link">@lang('login.register')</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
