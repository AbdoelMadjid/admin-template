                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-documentation" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-book"></i></span>
                            <span class="menu-text">Documentation</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-documentation">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-doc-menu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-menu-order"></i> Menu <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-doc-menu">
                                    <a href="{{ route('third', ['documentation', 'menu', 'introduction']) }}" class="dropdown-item">Introduction</a>
                                    <a href="{{ route('third', ['documentation', 'menu', 'folder-structure']) }}" class="dropdown-item">Folder Structure</a>
                                    <a href="{{ route('third', ['documentation', 'menu', 'getting-started']) }}" class="dropdown-item">Getting Started</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-doc-layout" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-layout-board"></i> Layout <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-doc-layout">
                                    <a href="{{ route('third', ['documentation', 'layouts', 'layouts']) }}" class="dropdown-item">Layouts Option</a>
                                    <a href="{{ route('third', ['documentation', 'layouts', 'sidebar']) }}" class="dropdown-item">Sidebars Option</a>
                                    <a href="{{ route('third', ['documentation', 'layouts', 'topbar']) }}" class="dropdown-item">Topbar Option</a>
                                    <a href="{{ route('third', ['documentation', 'layouts', 'theme-skin-setup']) }}" class="dropdown-item">Theme Skin Setup</a>
                                    <a href="{{ route('third', ['documentation', 'layouts', 'dark-mode']) }}" class="dropdown-item">Dark Mode</a>
                                    <a href="{{ route('third', ['documentation', 'layouts', 'sources']) }}" class="dropdown-item">Sources & Credits</a>
                                    <a href="{{ route('third', ['documentation', 'layouts', 'changelog']) }}" class="dropdown-item">Changelog</a>
                                </div>
                            </div>
                        </div>
                    </li>
