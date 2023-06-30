
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Template maker">
    <meta name="author" content="Ryahn from F95Zone">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/tag-it/css/jquery.tagit.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/blueimp-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/summernote/dist/summernote-lite.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/spectrum-colorpicker2/dist/spectrum.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select-picker/dist/picker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jquery-typeahead/dist/jquery.typeahead.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- ================== END core-css ================== -->

</head>
