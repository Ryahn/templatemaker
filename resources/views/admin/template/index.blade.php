@extends('admin.layout.admin')
@section('content')
<!-- BEGIN row -->
<div class="row">
    <!-- BEGIN col-6 -->
    <div class="col-xl-12">
        <!-- BEGIN card -->
        <div class="card mb-3">
            <!-- BEGIN card-body -->
            <div class="card-body">
                <!-- BEGIN title -->
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Templates</span>
                </div>
                <!-- END title -->
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-lg-12 mb-3 mb-lg-0">
                        <div class="align-items-center">
                            <table class="table table-striped table-borderless mb-2px small text-nowrap" id="templateTable">
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
                    <!-- END col-6 -->
                </div>
                <!-- END row -->
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
 <!-- modal-lg -->
 <div class="modal fade" id="templateModal" tabindex="-1" role="dialog" aria-labelledby="templateModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" id="templateModalContent">
        
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script>
    var templateTable = $('#templateTable').DataTable({
        dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: "/admin/template",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'type', name: 'type'},
        {data: 'game_name', name: 'game_name'},
        {data: 'devName', name: 'devName'},
        {data: 'version', name: 'version'},
        // {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});

$('#templateTable tbody').on('click', 'tr', function () {
    var data = templateTable.row( this ).data();
    console.log(data.id)
    $.ajax({
        type: 'GET',
        url: '/admin/template/view/'+data.id,
        success: function(result) {
            console.log(result)
            $('#templateModalContent').empty().html(result.html);
            $("#templateModal").modal("show");
        }
    });
});

// $("#templateView").on("click", function(){
//     var dataId = $(this).attr("data-id");
//     console.log(dataId)
//     $.ajax({
//         type: 'GET',
//         url: '/admin/template/view/'+dataId,
//         success: function(data) {
//             $('#templateModalContent').empty().html(data.html);
//             $("#templateModal").modal("show");
//         }
//     });
// });
</script>
@endsection