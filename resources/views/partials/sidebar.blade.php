<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item active">
                <a href="{{ route('homeIndex') }}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-house-door"></i></span>
                    <span class="menu-text">Home</span>
                </a>
            </div>
            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-fw me-2 fa-chart-bar"></i>
                    </span>
                    <span class="menu-text">Template</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu" style="display: block;">
                    <div class="menu-item">
                        <a href="{{ route('maker') }}" class="menu-link">
                            <span class="menu-icon"><i class="fas fa-fw me-2 fa-chart-bar"></i></span>
                            <span class="menu-text">Make Template</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('makerRecent') }}" class="menu-link">
                            <span class="menu-icon"><i class="fas fa-fw me-2 fa-list-alt"></i></span>
                            <span class="menu-text">Recent Templates</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="far fa-fw me-2 fa-comments"></i>
                    </span>
                    <span class="menu-text">Suggestions</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu" style="display: block;">
                    <div class="menu-item">
                        <a href="{{ route('suggest') }}" class="menu-link">
                            <span class="menu-icon"><i class="far fa-fw me-2 fa-comment-alt"></i></span>
                            <span class="menu-text">Make Suggestion</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('suggest.recent') }}" class="menu-link">
                            <span class="menu-icon"><i class="fas fa-fw me-2 fa-chart-bar"></i></span>
                            <span class="menu-text">Recent Suggestions</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-fw me-2 fa-info-circle"></i>
                    </span>
                    <span class="menu-text">Info</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu" style="display: block;">
                    <div class="menu-item">
                        <a href="{{ route('changelog') }}" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-card-text"></i></span>
                            <span class="menu-text">Change Log</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('help') }}" class="menu-link">
                            <span class="menu-icon"><i class="fas fa-fw me-2 fa-question"></i></span>
                            <span class="menu-text">Help</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<!-- END #sidebar -->

<!-- BEGIN mobile-sidebar-backdrop -->
<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
    data-toggle-class="app-sidebar-mobile-toggled"></button>
<!-- END mobile-sidebar-backdrop -->
