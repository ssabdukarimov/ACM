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
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <form class="form">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Oʻzbekcha</h4>
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
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Bu yerda masalaning o'zbek tilidagi ma'lumotlari kiritiladi</p>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name_uz">Masala nomi</label>
                                                        <input type="text" id="name_uz" class="form-control" placeholder="" name="name_uz">
                                                    </div>
                                                </div>
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <p>By default all formats are enabled and allowed to exist within a Quill editor and can be
                                                            configured with the <code>formats</code> option. This is separate from adding a control
                                                            in
                                                            the <code>Toolbar</code>. For example, you can configure Quill to allow bolded content
                                                            to be
                                                            pasted into an editor that has no bold button in the toolbar.</p>
                                                        <div class="row">
                                                            <div class="offset-md-2 col-md-8">
                                                                <div id="full-wrapper">
                                                                    <div id="full-container">
                                                                        <div class="editor">
                                                                            <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                                                            <p><br></p>
                                                                            <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open
                                                                                    source</a> WYSIWYG editor built for the modern web. With its <a
                                                                                    href="http://quilljs.com/docs/modules/">modular architecture</a>
                                                                                and
                                                                                expressive <a href="http://quilljs.com/docs/api/">API</a>, it is
                                                                                completely customizable to fit any need.</p>
                                                                            <p><br></p>
                                                                            <iframe class="ql-video ql-align-center"
                                                                                    src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0"
                                                                                    width="560" height="238"></iframe>
                                                                            <p><br></p>
                                                                            <p><br></p>
                                                                            <h2 class="ql-align-center">Getting Started is Easy</h2>
                                                                            <p><br></p>
                                                                            <pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
												// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
												var quill = new Quill('#editor', {
												modules: {
													toolbar: '#toolbar'
												},
												theme: 'snow'
												});
												// Open your browser's developer console to try out the API!
											</pre>
                                                                            <p><br></p>
                                                                            <p><br></p>
                                                                            <p class="ql-align-center"><strong>Built with</strong></p>
                                                                            <p class="ql-align-center">&nbsp;<span class="ql-formula"
                                                                                                                   data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span>&nbsp;</p>
                                                                            <p><br></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">E-mail</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Contact Number</label>
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="fa fa-paperclip"></i> Requirements</h4>

                                            <div class="form-group">
                                                <label for="companyName">Company</label>
                                                <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Interested in</label>
                                                        <select id="projectinput5" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput6">Budget</label>
                                                        <select id="projectinput6" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Select File</label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file">
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="projectinput8">About Project</label>
                                                <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <section class="full-editor">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Full Editor</h4>
                                                <a class="heading-elements-toggle"><i class="feather icon-ellipsis-h font-medium-3"></i></a>
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
                                                    <p>By default all formats are enabled and allowed to exist within a Quill editor and can be
                                                        configured with the <code>formats</code> option. This is separate from adding a control
                                                        in
                                                        the <code>Toolbar</code>. For example, you can configure Quill to allow bolded content
                                                        to be
                                                        pasted into an editor that has no bold button in the toolbar.</p>
                                                    <div class="row">
                                                        <div class="offset-md-2 col-md-8">
                                                            <div id="full-wrapper">
                                                                <div id="full-container">
                                                                    <div class="editor">
                                                                        <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                                                        <p><br></p>
                                                                        <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open
                                                                                source</a> WYSIWYG editor built for the modern web. With its <a
                                                                                href="http://quilljs.com/docs/modules/">modular architecture</a>
                                                                            and
                                                                            expressive <a href="http://quilljs.com/docs/api/">API</a>, it is
                                                                            completely customizable to fit any need.</p>
                                                                        <p><br></p>
                                                                        <iframe class="ql-video ql-align-center"
                                                                                src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0"
                                                                                width="560" height="238"></iframe>
                                                                        <p><br></p>
                                                                        <p><br></p>
                                                                        <h2 class="ql-align-center">Getting Started is Easy</h2>
                                                                        <p><br></p>
                                                                        <pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
												// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
												var quill = new Quill('#editor', {
												modules: {
													toolbar: '#toolbar'
												},
												theme: 'snow'
												});
												// Open your browser's developer console to try out the API!
											</pre>
                                                                        <p><br></p>
                                                                        <p><br></p>
                                                                        <p class="ql-align-center"><strong>Built with</strong></p>
                                                                        <p class="ql-align-center">&nbsp;<span class="ql-formula"
                                                                                                               data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span>&nbsp;</p>
                                                                        <p><br></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('script')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/quill/quill.bubble.css">
@endsection


@section('scripts')
    <script src="/app-assets/js/scripts/forms/quill/form-text-editor.min.js"></script>
    <script src="/app-assets/vendors/js/forms/quill/highlight.min.js"></script>
    <script src="/app-assets/vendors/js/forms/quill/quill.js"></script>
    <script src="/app-assets/vendors/js/forms/quill/katex.min.js"></script>
@endsection
