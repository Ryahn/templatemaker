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
    
    <!-- END col-6 -->
</div>
<!-- END row -->
@endsection
@section('scripts')
{{-- <script>
    var table = $('#adminErrorLogsTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "/admin",
    columns: [
        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
        {data: 'timestamp', name: 'timestamp'},
        {data: 'env', name: 'env'},
        {data: 'type', name: 'type'},
        {data: 'message', name: 'message'},
    ]
});
</script> --}}
@endsection