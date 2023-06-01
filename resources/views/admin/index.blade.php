@extends('admin.layout.admin')
@section('content')
<!-- BEGIN row -->
<div class="row">
    <!-- BEGIN col-3 -->
    <div class="col-xl-3 col-lg-6">
        <!-- BEGIN card -->
        <div class="card mb-3">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <!-- BEGIN title -->
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Total Templates</span>
                </div>
                <!-- END title -->
                <!-- BEGIN stat-lg -->
                <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0">{{ $template }}</h3>
                    </div>
                </div>
                <!-- END stat-lg -->
            </div>
            <!-- END card-body -->
            
            <!-- BEGIN card-arrow -->
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
            <!-- END card-arrow -->
        </div>
        <!-- END card -->
    </div>
    <!-- END col-3 -->
    
    <!-- BEGIN col-3 -->
    <div class="col-xl-3 col-lg-6">
        <!-- BEGIN card -->
        <div class="card mb-3">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <!-- BEGIN title -->
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Total Genres</span>
                </div>
                <!-- END title -->
                <!-- BEGIN stat-lg -->
                <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0">{{ $tags }}</h3>
                    </div>
                </div>
                <!-- END stat-lg -->
            </div>
            <!-- END card-body -->
            
            <!-- BEGIN card-arrow -->
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
            <!-- END card-arrow -->
        </div>
        <!-- END card -->
    </div>
    <!-- END col-3 -->
    
    <!-- BEGIN col-3 -->
    <div class="col-xl-3 col-lg-6">
        <!-- BEGIN card -->
        <div class="card mb-3">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <!-- BEGIN title -->
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Total Softwares</span>
                </div>
                <!-- END title -->
                <!-- BEGIN stat-lg -->
                <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0">{{ $software }}</h3>
                    </div>
                    <div class="col-5">
                    </div>
                </div>
                <!-- END stat-lg -->
            </div>
            <!-- END card-body -->
            
            <!-- BEGIN card-arrow -->
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
            <!-- END card-arrow -->
        </div>
        <!-- END card -->
    </div>
    <!-- END col-3 -->
    
    <!-- BEGIN col-3 -->
    <div class="col-xl-3 col-lg-6">
        <!-- BEGIN card -->
        <div class="card mb-3">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <!-- BEGIN title -->
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Total Languages</span>
                </div>
                <!-- END title -->
                <!-- BEGIN stat-lg -->
                <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0">{{ $lang }}</h3>
                    </div>
                </div>
                <!-- END stat-lg -->
            </div>
            <!-- END card-body -->
            
            <!-- BEGIN card-arrow -->
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
            <!-- END card-arrow -->
        </div>
        <!-- END card -->
    </div>
    <!-- END col-3 -->
    
    <!-- BEGIN col-6 -->
    <div class="col-xl-6">
        <!-- BEGIN card -->
        <div class="card mb-3">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <!-- BEGIN title -->
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Error Logs</span>
                </div>
                <!-- END title -->
                <!-- BEGIN table -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless mb-2px small text-nowrap" id="adminErrorLogsTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Timestamp</th>
                                <th>Env</th>
                                <th>Type</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        {{-- <tbody>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                        You have sold an item - $1,299
                                    </span>
                                </td>
                                <td><small>just now</small></td>
                                <td>
                                    <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PRODUCT</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
                                        Firewall upgrade 
                                    </span>
                                </td>
                                <td><small>1 min ago</small></td>
                                <td>
                                    <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">SERVER</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
                                        Push notification v2.0 installation
                                    </span>
                                </td>
                                <td><small>1 mins ago</small></td>
                                <td>
                                    <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ANDROID</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                        New Subscription - 1yr Plan 
                                    </span>
                                </td>
                                <td><small>1 min ago</small></td>
                                <td>
                                    <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">SALES</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
                                        2 Unread enquiry
                                    </span>
                                </td>
                                <td><small>2 mins ago</small></td>
                                <td>
                                    <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ENQUIRY</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                        $30,402 received from Paypal
                                    </span>
                                </td>
                                <td><small>2 mins ago</small></td>
                                <td>
                                    <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PAYMENT</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                        3 payment received
                                    </span>
                                </td>
                                <td><small>5 mins ago</small></td>
                                <td>
                                    <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PAYMENT</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
                                        1 pull request from github
                                    </span>
                                </td>
                                <td><small>5 mins ago</small></td>
                                <td>
                                    <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">GITHUB</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
                                        3 pending invoice to generate
                                    </span>
                                </td>
                                <td><small>5 mins ago</small></td>
                                <td>
                                    <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">INVOICE</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
                                        2 new message from fb messenger
                                    </span>
                                </td>
                                <td><small>7 mins ago</small></td>
                                <td>
                                    <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">INBOX</span>
                                </td>
                                <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                            </tr>
                        </tbody> --}}
                    </table>
                </div>
                <!-- END table -->
            </div>
            <!-- END card-body -->
            
            <!-- BEGIN card-arrow -->
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
            <!-- END card-arrow -->
        </div>
        <!-- END card -->
    </div>
    <!-- END col-6 -->
</div>
<!-- END row -->
@endsection
@section('scripts')
<script>
    var table = $('#adminErrorLogsTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "/admin/datatables/logs",
    columns: [
        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
        {data: 'timestamp', name: 'timestamp'},
        {data: 'env', name: 'env'},
        {data: 'type', name: 'type'},
        {data: 'message', name: 'message'},
    ]
});
</script>
@endsection