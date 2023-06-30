@extends('layouts.app')

@section('content')
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-10">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-9">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Help/FAQ</li>
                        </ul>

                        <h1 class="page-header">
                            Help/FAQ
                        </h1>

                        <hr class="mb-4">

                        <div class="col-xl-12 col-12">
                            <div class="accordion" id="help1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            What type should I choose when generating a template?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#help1">
                                        <div class="accordion-body">
                                            <p>You have the following to choose from:</p>
                                            <ul>
                                                <li>Animation</li>
                                                <li>Assets</li>
                                                <li>Collection</li>
                                                <li>Comic</li>
                                                <li>Game</li>
                                                <li>Manga</li>
                                                <li>Other</li>
                                            </ul>
                                            <p>Collection and Other can be choosen as an All in One template. As it will list all available fields.</p>
                                            <p>When in double, choose Other.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="help2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            How do I format Dev Links?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#help2">
                                        <div class="accordion-body">
                                            <p><code>[url=LINK]SITENAME[/url]</code> will be formated into <code>SITENAME|LINK</code>. Separated them by commas for muliple links. No spaces.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="help3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            What does Import BBCode do?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#help3">
                                        <div class="accordion-body">
                                            <p>Import BBCode will import BBCode from the database. If another user has modified the BBCode directly, this will overwrite it.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="help4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            How can I suggest features or additions to this site?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#help4">
                                        <div class="accordion-body">
                                            <p>Use <a href="{{ route('suggest') }}">Suggestion</a> system or contact Ryahn on F95Zone discord.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!-- END col-9-->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-10 -->
    </div>
    <!-- END row -->
    </div>
    <!-- END container -->
@endsection
