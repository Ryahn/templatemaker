<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN desktop-toggler -->
    <div class="desktop-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
            data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- BEGIN desktop-toggler -->

    <!-- BEGIN mobile-toggler -->
    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
            data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- END mobile-toggler -->

    <!-- BEGIN brand -->
    <div class="brand">
        <a href="#" class="brand-logo">
            <span class="brand-img">
                <span class="brand-img-text text-theme">T</span>
            </span>
            <span class="brand-text">Template</span>
        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">

        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                <div class="menu-icon"><i class="bi bi-grid-3x3-gap nav-icon"></i></div>
            </a>
            <div class="dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1">

                <div class="row row-grid gx-0">
                    @if (Route::has('login') && !Auth::check()) <div class="col-4"> @else <div class="col-6"> @endif
                        <a href="/changelog" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
                            <div class="fw-500 fs-10px text-inverse">Change Log</div>
                        </a>
                    </div>
                    @if (Route::has('login') && !Auth::check()) <div class="col-4"> @else <div class="col-6"> @endif
                        <a href="/help" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div class="position-relative">
                                <i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
                            </div>
                            <div class="fw-500 fs-10px text-inverse">Help</div>
                        </a>
                    </div>
                    @if (Route::has('login') && !Auth::check())
                    <div class="col-4">
                        <a href="{{ url('/login') }}" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div class="position-relative">
                                <i class="bi bi-key-fill h2 opacity-5 d-block my-1"></i>
                            </div>
                            <div class="fw-500 fs-10px text-inverse">Login</div>
                        </a>
                    </div>
                @endif

                </div>
            </div>
            @if (Route::has('login') && Auth::check())
            <div class="menu-item dropdown dropdown-mobile-full">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                    {{-- <div class="menu-img online">
                        <img src="assets/img/user/profile.jpg" alt="Profile" height="60">
                    </div> --}}
                    <div class="menu-text d-sm-block d-none w-170px">{{ Auth::user()->name }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                    {{-- <a class="dropdown-item d-flex align-items-center" href="profile.html">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
                    <a class="dropdown-item d-flex align-items-center" href="email_inbox.html">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
                    <a class="dropdown-item d-flex align-items-center" href="calendar.html">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
                    <a class="dropdown-item d-flex align-items-center" href="settings.html">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item d-flex align-items-center"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endif
        </div>


    </div>
    <!-- END menu -->


</div>
<!-- END #header -->