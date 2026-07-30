                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-layout"></i></span>
                            <span class="menu-text">Layouts</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts-one" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-layout"></i> Layout Options <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-layouts-one">
                                    <a href="{{ route('third', ['style', 'layouts-options', 'scrollable'])}}" class="dropdown-item" target="_blank">Scrollable</a>
                                    <a href="{{ route('third', ['style', 'layouts-options', 'compact'])}}" class="dropdown-item" target="_blank">Compact</a>
                                    <a href="{{ route('third', ['style', 'layouts-options', 'boxed'])}}" class="dropdown-item" target="_blank">Boxed</a>
                                    <a href="{{ route('third', ['style', 'layouts-options', 'horizontal'])}}" class="dropdown-item" target="_blank">Horizontal</a>
                                    <a href="{{ route('third', ['style', 'layouts-options', 'preloader'])}}" class="dropdown-item" target="_blank">Preloader</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-sidebars" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-layout-sidebar"></i> Sidebars <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-sidebars">
                                    <a href="{{ route('third', ['style', 'sidebars', 'light'])}}" class="dropdown-item" target="_blank">Light Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'gradient'])}}" class="dropdown-item" target="_blank">Gradient Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'gray'])}}" class="dropdown-item" target="_blank">Gray Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'image'])}}" class="dropdown-item" target="_blank">Image Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'compact'])}}" class="dropdown-item" target="_blank">Compact Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'icon-view'])}}" class="dropdown-item" target="_blank">Icon View Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'on-hover'])}}" class="dropdown-item" target="_blank">On Hover Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'on-hover-active'])}}" class="dropdown-item" target="_blank">On Hover Active</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'offcanvas'])}}" class="dropdown-item" target="_blank">Offcanvas Menu</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'no-icons'])}}" class="dropdown-item" target="_blank">No Icons with Lines</a>
                                    <a href="{{ route('third', ['style', 'sidebars', 'with-lines'])}}" class="dropdown-item" target="_blank">Sidebar with Lines</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-topbars" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-box-align-top"></i> Topbar <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-topbars">
                                    <a href="{{ route('third', ['style', 'topbar', 'dark'])}}" class="dropdown-item" target="_blank">Dark Topbar</a>
                                    <a href="{{ route('third', ['style', 'topbar', 'gray'])}}" class="dropdown-item" target="_blank">Gray Topbar</a>
                                    <a href="{{ route('third', ['style', 'topbar', 'gradient'])}}" class="dropdown-item" target="_blank">Gradient Topbar</a>
                                    <a href="{{ route('third', ['style', 'topbar', 'sub-items'])}}" class="dropdown-item">Topbar with Sub Items</a>
                                    <a href="{{ route('third', ['style', 'topbar', 'tools'])}}" class="dropdown-item">Topbar with Tools</a>
                                </div>
                            </div>
                        </div>
                    </li>
