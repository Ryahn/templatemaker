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
            <div class="menu-item">
                <a href="{{ route('maker') }}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-file-ruled"></i></span>
                    <span class="menu-text">Template Maker</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('makerRecent') }}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-file-ruled"></i></span>
                    <span class="menu-text">Recent Templates</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('changelog') }}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-card-text"></i></span>
                    <span class="menu-text">Change Log</span>
                </a>
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