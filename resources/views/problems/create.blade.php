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
                    <h3 class="content-header-title">@lang('problems.new_problem')</h3>
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
                                    <form class="form form-horizontal" method="post" action="{{ route('problems.store') }}">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-clipboard"></i> Oʻzbekcha</h4>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="name_uz" class="form-control" placeholder="Masala nomi" name="name_uz">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="time"></label>
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="time" class="form-control" placeholder="Vaqt bo'yicha cheklov (ms)" name="time">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="memory"></label>
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="memory" class="form-control" placeholder="Xotira bo'yicha cheklov (MB)" name="memory">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="point"></label>
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="point" id="memory" class="form-control" placeholder="Masala uchun ajratilgan ball" name="point">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="body_uz" rows="5" class="form-control" placeholder="Masala sharti" name="body_uz"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="input_uz" rows="5" class="form-control" placeholder="Kiruvchi ma'lumotlar" name="input_uz"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="output_uz" rows="5" class="form-control" placeholder="Chiquvchi ma'lumotlar" name="output_uz"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="input_example" rows="5" class="form-control" placeholder="Kiruvchi ma'lumotga misol" name="input_example"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="output_example" rows="5" class="form-control" placeholder="Chiquvchi ma'lumotga misol" name="output_example"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="note_uz" rows="5" class="form-control" placeholder="Izoh" name="note_uz"></textarea>
                                                </div>
                                            </div>





                                            <h4 class="form-section"><i class="feather icon-clipboard"></i> Русский</h4>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="name_ru" class="form-control" placeholder="Masala nomi" name="name_ru">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="body_ru" rows="5" class="form-control" placeholder="Masala sharti" name="body_ru"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="input_ru" rows="5" class="form-control" placeholder="Kiruvchi ma'lumotlar" name="input_ru"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="output_ru" rows="5" class="form-control" placeholder="Chiquvchi ma'lumotlar" name="output_ru"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="note_ru" rows="5" class="form-control" placeholder="Izoh" name="note_ru"></textarea>
                                                </div>
                                            </div>


                                            <h4 class="form-section"><i class="feather icon-clipboard"></i> English</h4>
                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <input type="text" id="name_en" class="form-control" placeholder="Masala nomi" name="name_en">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="body_en" rows="5" class="form-control" placeholder="Masala sharti" name="body_en"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="input_en" rows="5" class="form-control" placeholder="Kiruvchi ma'lumotlar" name="input_en"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="output_en" rows="5" class="form-control" placeholder="Chiquvchi ma'lumotlar" name="output_en"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-2">
                                                    <textarea id="note_en" rows="5" class="form-control" placeholder="Izoh" name="note_en"></textarea>
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
