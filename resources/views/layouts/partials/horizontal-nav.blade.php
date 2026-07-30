<!-- Horizontal Menu Start -->
<header class="topnav">
    <nav class="navbar navbar-expand-lg">
        <nav class="container-fluid">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    @include('layouts.partials.horizontal-nav.menu')
                    @include('layouts.partials.horizontal-nav.apps')
                    @include('layouts.partials.horizontal-nav.custom-pages')
                    @include('layouts.partials.horizontal-nav.style')
                    @include('layouts.partials.horizontal-nav.component')
                    @include('layouts.partials.horizontal-nav.documentation')
                    @include('layouts.partials.horizontal-nav.menu-item')

                </ul>
            </div>
        </nav>
    </nav>
</header>
<!-- Horizontal Menu End -->

<style>
    html[data-layout="topnav"] .app-topbar,
    html[data-layout="topnav"] .topnav {
        background: #fff !important;
        opacity: 1 !important;
    }

    html[data-layout="topnav"] .topnav {
        backdrop-filter: none !important;
    }

    @media (min-width: 992px) {
        html[data-layout="topnav"] .app-topbar {
            z-index: 1080 !important;
        }

        html[data-layout="topnav"] .topnav {
            z-index: 1060 !important;
        }

        html[data-layout="topnav"] .app-topbar .dropdown-menu {
            z-index: 1090 !important;
        }

        html[data-layout="topnav"] .topnav,
        html[data-layout="topnav"] .topnav .navbar,
        html[data-layout="topnav"] .topnav .navbar-nav,
        html[data-layout="topnav"] .topnav .navbar-nav .dropdown,
        html[data-layout="topnav"] .topnav .navbar-nav .dropdown-menu {
            overflow: visible !important;
        }

        html[data-layout="topnav"] .topnav .navbar-nav>.nav-item.dropdown {
            position: relative;
        }

        html[data-layout="topnav"] .topnav .dropdown-menu {
            z-index: 1070 !important;
            margin-top: 0;
        }

        html[data-layout="topnav"] .topnav .navbar-nav>.nav-item.dropdown>.dropdown-menu {
            top: 100%;
            left: 0;
        }

        html[data-layout="topnav"] .topnav .dropdown-menu .dropdown {
            position: relative;
        }

        html[data-layout="topnav"] .topnav .dropdown-menu .dropdown>.dropdown-menu {
            position: absolute;
            top: 0;
            left: 100%;
            margin-top: 0;
        }

        html[data-layout="topnav"] .topnav .navbar-nav .dropdown:hover>.dropdown-menu {
            display: block;
        }

        html[data-layout="topnav"] .topnav .navbar-nav .dropdown-menu .dropdown:hover>.dropdown-menu {
            display: block;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const topnav = document.querySelector('.topnav');
        if (!topnav) return;

        topnav.querySelectorAll('.dropdown-toggle').forEach((toggle) => {
            toggle.addEventListener('click', function(e) {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    e.preventDefault();
                }
            });
        });
    });
</script>
