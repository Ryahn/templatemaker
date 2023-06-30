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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Suggestion</li>
                        </ul>

                        <h1 class="page-header">
                            Make a suggestion here
                        </h1>

                        <hr class="mb-4">
                        <form id="suggestForm">
                            @csrf
                            <!-- BEGIN #header -->
                            <div id="headerInfo" class="mb-5">
                                <h4>How it works</h4>
                                <p>Here you can suggestion new genre tags, OS, software and anything that this listed.</p>
                                <div class="card">

                                    <div class="card-body pb-2">

                                        <div class="row">
                                            <div class="col-xl-4">{{-- Type --}}
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="type">Type</label>
                                                    <input type="hidden" name="requested_by" value="{{ Auth::user()->global_name }}">
                                                    <select class="form-select" id="type" name="type">
                                                        <option></option>
                                                        <option value="genre">Genre (Tag)</option>
                                                        <option value="os">Operating System</option>
                                                        <option value="software">Software (like DAZ)</option>
                                                        <option value="language">Language</option>
                                                        <option value="feature">Site Feature</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-8"> {{-- Title --}}
                                                <div class="form-group mb-3">
                                                    <label class="form-label"
                                                        for="name">Title
                                                        name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">{{-- Overview --}}
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="notes">Notes</label>
                                                    <textarea class="form-control" id="notes" rows="3" name="notes"
                                                        placeholder="souleater is not into his cousin"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group mb-3">
                                                    <button class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3"
                                            id="addSuggestion">Add Suggestion</button>
                                                </div>
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
                            <!-- END #header -->

                            
                        </form>
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

@section('scripts')
    <script>
        
        $("#suggestForm").on('submit', function(e) {

e.preventDefault();

$.ajax({
    type: 'POST',
    url: "/suggest/store",
    data: $(this).serialize(),
    success: function(data) {
        if($.isEmptyObject(data.errors)){
        // console.log(data)
            $('.toast-body').empty().append(data.msg);
            $('.toast').toast('show');
        } else {
            $('.toast-body').empty();
            $.each( data.errors, function( key, value ) {
                $('.toast-body').append(`<p>${value}</p>`);
            });
            $('.toast').toast('show', {
            delay: 10000
            });
        }
    }
});

});
    </script>
@endsection