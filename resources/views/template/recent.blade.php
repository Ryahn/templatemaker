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
@section('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#recentModalForm").on('submit', function(e) {

    e.preventDefault();
    console.log($(this).serialize())

    // $.ajax({
    //     type: 'POST',
    //     url: "/maker/store",
    //     data: $(this).serialize(),
    //     success: function(data) {
    //         if ($.isEmptyObject(data.errors)) {
    //             // console.log(data)
    //             $('.toast-body').empty().append(data.msg);
    //             $('.toast').toast('show');
    //             $.ajax({
    //                 type: 'GET',
    //                 url: "/maker" + "/" + data.id,
    //                 success: function(data1) {
    //                     $('#titleFormat').val(
    //                         `${data1.template.game_name} [${data1.template.version}][${data1.template.devName}]`
    //                         );
    //                     $('#genreFormat').val(data1.template.genre);
    //                     $('#bbcode').val(data1.html);
    //                 }
    //             })
    //         } else {
    //             $('.toast-body').empty();
    //             $.each(data.errors, function(key, value) {
    //                 $('.toast-body').append(`<p>${value}</p>`);
    //             });
    //             $('.toast').toast('show', {
    //                 delay: 10000
    //             });
    //         }
    //     }
    // });

});

var templateTable = $('#recentTemplateTable').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    processing: true,
    serverSide: true,
    responsive: true,
    order: [[ 0, "desc" ]],
    ajax: "/maker/recent",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'type', name: 'type'},
        {data: 'game_name', name: 'game_name'},
        {data: 'devName', name: 'devName'},
        {data: 'version', name: 'version'},
        // {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});

$('#recentTemplateTable tbody').on('click', 'tr', function () {
    var data = templateTable.row( this ).data();
    $.ajax({
        type: 'GET',
        url: '/maker/recent/view/'+data.id,
        success: function(result) {
            $('#recentModalViewContent').empty().html(result.html);
            $("#recentViewModal").modal("show");
        }
    });
});
</script>
@endsection
