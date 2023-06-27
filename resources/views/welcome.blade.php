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
                            <li class="breadcrumb-item active">Index</li>
                        </ul>

                        <h1 class="page-header">
                            {{ config('app.name', 'Laravel') }} {{ config('app.version') }} <small>F95zone thread template system</small>
                        </h1>

                        <hr class="mb-4">

                        <!-- BEGIN #about -->
                        <div class="mb-5">
                            <h4>About</h4>

                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <p> This system is available for everyone to use. This is to help keep thread
                                                uniform. As everyone tends to add their own things or forget something.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END #about -->
                        <!-- BEGIN #about -->
                        <div class="mb-5">
                            <h4>How to use</h4>

                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <p> Once you use the <a href="#">template maker</a>, select the type of thread you are making. Ex: <span class="badge bg-primary">Game</span>
                                            </p>
                                            <p>Fill out the template and submit it. It will generate the BBCode for you to copy and paste into the thread.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END #about -->
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
