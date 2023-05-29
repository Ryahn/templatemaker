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
                        <li class="breadcrumb-item active">Changelog</li>
                    </ul>

                    <h1 class="page-header">
                        Changelog
                    </h1>

                    <hr class="mb-4">

                    <div class="col-lg-8 col-md-10 col-12">
                        <h5 class="mt-4"> <span class="p-2 bg-gradient.bg-gray-400 border-success rounded text-success"> Version 3.0.4</span>
                            - 29th, May 2023</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Added bbcode for video trailers.</li>
                        </ul>

                        <h5 class="mt-4"> <span class="p-2 bg-gradient.bg-gray-400 border-success rounded text-success"> Version 3.0.3</span>
                            - 29th, May 2023</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Added bbcode for download links for each OS.</li>
                        </ul>

                        <h5 class="mt-4"> <span class="p-2 bg-gradient.bg-gray-400 border-success rounded text-success"> Version 3.0.1</span>
                            - 18th, May 2023</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Added Languages to database. All 142 available but no dialects.</li>
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>OS, Genre and Software added to database.</li>
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Fixed a login bug not allowing remember me.</li>
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Fixed all template options to be fluid.</li>
                        </ul>

                        <h5 class="mt-4"> <span class="p-2 bg-gradient.bg-gray-400 border-success rounded text-success"> Version 3.0.0</span>
                            - 18th, May 2023</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Initial Released</li>
                        </ul>

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