<!-- Topbar Start -->
<header class="app-topbar">
    <div class="container-fluid topbar-menu">
        <div class="d-flex align-items-center gap-2">
            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                    <span class="logo-lg">
                        <img src="/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                    <span class="logo-lg">
                        <img src="/images/logo-black.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="/images/logo-sm.png" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button btn btn-primary btn-icon" type="button" onclick="return window.__inspiniaToggleSidebarFallback(event)">
                <i class="ti ti-menu-4 fs-22"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="ti ti-menu-4 fs-22"></i>
            </button>

            <!-- Search -->
            <div class="app-search d-none d-xl-flex">
                <input type="search" class="form-control topbar-search" name="search"
                    placeholder="{{ App::getLocale() === 'id' ? 'Cari sesuatu...' : 'Search for something...' }}"
                    data-lang="topbar-search">
                <i data-lucide="search" class="app-search-icon text-muted"></i>
            </div>

            <!-- Mega Menu Dropdown -->
            @include('layouts.partials.topbar.mega-menu')
            <!-- end topbar-item -->
        </div> <!-- .d-flex-->

        <div class="d-flex align-items-center gap-2">
            <!-- Language Dropdown -->
            @include('layouts.partials.topbar.language')
            <!-- end topbar item-->

            <!-- Messages Dropdown -->
            @include('layouts.partials.topbar.messages')
            <!-- end topbar item-->

            <!-- Notification Dropdown -->
            @include('layouts.partials.topbar.notification')

            <!-- Button Trigger Customizer Offcanvas -->
            @include('layouts.partials.topbar.button-customizer')

            <!-- Light/Dark Mode Button -->
            @include('layouts.partials.topbar.button-light-dark-mode')

            <!-- User Dropdown -->
            @include('layouts.partials.topbar.user')
        </div>
    </div>
</header>
<!-- Topbar End -->

<script>
    window.__inspiniaToggleSidebarFallback = function(event) {
        if (event) {
            event.preventDefault();
            event.stopImmediatePropagation();
        }

        var html = document.documentElement;
        var current = html.getAttribute("data-sidenav-size") || "default";
        var configSize = (window.config && window.config.sidenav && window.config.sidenav.size)
            ? window.config.sidenav.size
            : "default";

        var isOffcanvas = current === "offcanvas";

        if (!isOffcanvas) {
            if (configSize === "compact") {
                html.setAttribute("data-sidenav-size", current === "condensed" ? "compact" : "condensed");
            } else {
                html.setAttribute("data-sidenav-size", current === "condensed" ? "default" : "condensed");
            }
        }

        var enabled = html.classList.toggle("sidebar-enable");
        var backdrop = document.getElementById("custom-backdrop");

        if (isOffcanvas && enabled && !backdrop) {
            backdrop = document.createElement("div");
            backdrop.id = "custom-backdrop";
            backdrop.className = "offcanvas-backdrop fade show";
            document.body.appendChild(backdrop);
            document.body.style.overflow = "hidden";
            if (window.innerWidth > 767) {
                document.body.style.paddingRight = "15px";
            }
            backdrop.addEventListener("click", function() {
                html.classList.remove("sidebar-enable");
                if (backdrop && backdrop.parentNode) {
                    backdrop.parentNode.removeChild(backdrop);
                }
                document.body.style.overflow = "";
                document.body.style.paddingRight = "";
            });
        }

        if (!enabled && backdrop) {
            backdrop.parentNode.removeChild(backdrop);
            document.body.style.overflow = "";
            document.body.style.paddingRight = "";
        }

        return false;
    };
</script>
