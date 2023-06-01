<head>
	<meta charset="utf-8">
	<title>{{ config('app.name', 'Laravel') }} | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Template maker Admin Dashboard">
    <meta name="author" content="Ryahn from F95Zone">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet">
	<!-- ================== END page-css ================== -->

</head>