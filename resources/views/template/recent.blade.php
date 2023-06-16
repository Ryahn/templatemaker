@extends('layouts.app')

@section('content')
    <!-- BEGIN container -->
    <div class="container">
        <div class="toast bg-danger text-white" data-autohide="false" style="position: absolute;top: 4rem;right: 0;">
            <div class="toast-header">
                <i class="far fa-bell text-muted me-2"></i>
                <strong class="me-auto">Message</strong>
                <small>{{ \Carbon\Carbon::now()->diffForHumans() }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">

            </div>
        </div>
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-12">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homeIndex') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('maker') }}">Template Maker</a></li>
                            <li class="breadcrumb-item active">Recent Templates</li>
                        </ul>

                        <h1 class="page-header">
                            View <small>recently made templates</small>
                        </h1>

                        <hr class="mb-4">
                        <!-- BEGIN #header -->
                        <div id="headerInfo" class="mb-5">
                                <h4>Info</h4>
                                <p>To edit current template. Click on the row and a popup will appear.</p>
                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-xl-12">{{-- Type --}}
                                            <table class="table table-striped table-borderless mb-2px small text-nowrap" id="recentTemplateTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Type</th>
                                                        <th>Game Name</th>
                                                        <th>Dev Name</th>
                                                        <th>Version</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
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
                    </div>
                    <!-- END row -->
                </div>
                <!-- END col-10 -->
                <!-- Start Modal -->
                <div class="modal" id="recentViewModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" id="recentModalViewContent"></div>
                    </div>
                </div>
                <!-- End Modal -->

            </div>
            <!-- END row -->

        </div>
        <!-- END container -->
@endsection
