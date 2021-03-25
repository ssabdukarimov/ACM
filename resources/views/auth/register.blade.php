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
                            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                <div class="card-header border-0">
                                    <div class="text-center">
                                        <h2 class="brand-text">Olympics</h2>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Create
							Account</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" method="POST" action="{{ route('register') }}" >
                                            @csrf

                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        {{ $error }}
                                                    </div>
                                                @endforeach
                                            @endif

                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="text" class="form-control" name="fname" id="fname" placeholder="@lang('login.fname')">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="text" class="form-control" name="lname" id="lname" placeholder="@lang('login.lname')">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="text" class="form-control" name="mname" id="mname" placeholder="@lang('login.mname')">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <?php
                                            $regions = \App\Region::all();
                                            ?>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <select id="region_id" type="text" class="form-control" name="region_id" required autocomplete="region" autofocus>
                                                    <option value="0">@lang('login.select')</option>
                                                    @foreach($regions as $region)
                                                        <option value="{{ $region->id }}">
                                                            @if(\Session::get('locale') == 'uz') {{ $region->name_uz }}
                                                            @elseif(\Session::get('locale') == 'ru')  {{ $region->name_ru }}
                                                            @else  {{ $region->name_en }}
                                                            @endif
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-position">
                                                    <i class="feather icon-chevron-down"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="@lang('login.email')" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-mail"></i>
                                                </div>
                                            </fieldset>

                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="@lang('login.password')" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="@lang('login.password')" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-primary btn-block"><i class="feather icon-unlock"></i> @lang('login.register')</button>
                                        </form>
                                    </div>
                                    <p class="text-center">@lang('login.have') <a href="{{ route('login') }}"
                                                                                        class="card-link">@lang('login.login')</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
