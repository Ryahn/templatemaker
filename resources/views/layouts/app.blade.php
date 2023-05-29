<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
@include('partials.head')
<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        @include('partials.header')

        @include('partials.sidebar')

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

    
    @include('partials.scripts')
    @yield('scripts')
</body>

</html>