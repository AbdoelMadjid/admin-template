<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarMenuDoc" aria-expanded="false" aria-controls="sidebarMenuDoc"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-menu-order"></i></span>
        <span class="menu-text" data-lang="menu-title">Menu</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarMenuDoc">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'menu', 'introduction']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="introduction">Introduction</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'menu', 'folder-structure']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="folder-structure">Folder Structure</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'menu', 'getting-started']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="getting-started">Getting Started</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarLayoutDoc" aria-expanded="false" aria-controls="sidebarLayoutDoc"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-layout-board"></i></span>
        <span class="menu-text" data-lang="layouts-title">Layout</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarLayoutDoc">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'layouts']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="layouts-option">Layouts Option</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'sidebar']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="sidebars-option">Sidebars Option</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'topbar']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="topbar-option">Topbar Option</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'theme-skin-setup']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="theme-skin-setup">Theme Skin Setup</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'dark-mode']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="dark-mode">Dark Mode</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'sources']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="sources-credit">Sources & Credits</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['documentation', 'layouts', 'changelog']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="changelog">Changelog</span>
                </a>
            </li>
        </ul>
    </div>
</li>
