<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
@include('admin.layout.partials.head')
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		@include('admin.layout.partials.header')
		
		@include('admin.layout.partials.sidebar')
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			@yield('content')
		</div>
		<!-- END #content -->

		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	@include('admin.layout.partials.scripts')
	@yield('scripts')

</body>
</html>
