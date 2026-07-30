                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-files"></i></span>
                            <span class="menu-text">Pages</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <!-- Pages Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-genr-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-notebook"></i>General Pages <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-genr-pages">
                                    <a href="{{ route('third', ['custom', 'pages', 'profile'])}}" class="dropdown-item">Profile</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'faq'])}}" class="dropdown-item">FAQ</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'pricing'])}}" class="dropdown-item">Pricing</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'empty'])}}" class="dropdown-item">Empty Page</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'timeline'])}}" class="dropdown-item">Timeline</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'search-results'])}}" class="dropdown-item">Search Results</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'coming-soon'])}}" class="dropdown-item">Coming Soon</a>
                                    <a href="{{ route('third', ['custom', 'pages', 'terms-conditions'])}}" class="dropdown-item">Terms & Conditions</a>
                                </div>
                            </div>

                            <!-- Miscellaneous Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-misc" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-package"></i> Miscellaneous <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-misc">
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'nestable'])}}" class="dropdown-item">Nestable List</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'text-diff'])}}" class="dropdown-item">Text Diff</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'pdf-viewer'])}}" class="dropdown-item">PDF Viewer</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'i18'])}}" class="dropdown-item">i18 Support</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'sweet-alerts'])}}" class="dropdown-item">Sweet Alerts</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'idle-timer'])}}" class="dropdown-item">Idle Timer</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'pass-meter'])}}" class="dropdown-item">Password Meter</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'live-favicon'])}}" class="dropdown-item">Live Favicon</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'clipboard'])}}" class="dropdown-item">Clipboard</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'tree-view'])}}" class="dropdown-item">Tree View</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'loading-buttons'])}}" class="dropdown-item">Loading Buttons</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'gallery'])}}" class="dropdown-item">Gallery</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'masonry'])}}" class="dropdown-item">Masonry</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'tour'])}}" class="dropdown-item">Tour</a>
                                    <a href="{{ route('third', ['custom', 'miscellaneous', 'animation'])}}" class="dropdown-item">Animation</a>
                                </div>
                            </div>

                            <!-- Auth Version 1 Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth-v1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-shield-lock"></i> Authentication 1 <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-auth-v1">
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'login'])}}" target="_blank" class="dropdown-item">Login</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'register'])}}" target="_blank" class="dropdown-item">Register</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'forgot-password'])}}" target="_blank" class="dropdown-item">Forgot Password</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'confirm-password'])}}" target="_blank" class="dropdown-item">Reset Password</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'two-factor'])}}" target="_blank" class="dropdown-item">Two Factor</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'lock-screen'])}}" target="_blank" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'success-mail'])}}" target="_blank" class="dropdown-item">Success Mail</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'login-pin'])}}" target="_blank" class="dropdown-item">Login with PIN</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth1', 'delete-account'])}}" target="_blank" class="dropdown-item">Delete Account</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth-v2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-user-hexagon"></i> Authentication 2 <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-auth-v2">
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'login']) }}" target="_blank" class="dropdown-item">Login</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'register']) }}" target="_blank" class="dropdown-item">Register</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'forgot-password']) }}" target="_blank" class="dropdown-item">Forgot Password</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'reset-password']) }}" target="_blank" class="dropdown-item">Reset Password</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'two-factor']) }}" target="_blank" class="dropdown-item">Two Factor</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'lock-screen']) }}" target="_blank" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'success-mail']) }}" target="_blank" class="dropdown-item">Success Mail</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'login-pin']) }}" target="_blank" class="dropdown-item">Login with PIN</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth2', 'delete-account']) }}" target="_blank" class="dropdown-item">Delete Account</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth-v3" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-lock-access"></i> Authentication 3 <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-auth-v3">
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'login'])}}" target="_blank" class="dropdown-item">Login</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'register'])}}" target="_blank" class="dropdown-item">Register</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'forgot-password'])}}" target="_blank" class="dropdown-item">Forgot Password</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'reset-password'])}}" target="_blank" class="dropdown-item">Reset Password</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'two-factor'])}}" target="_blank" class="dropdown-item">Two Factor</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'lock-screen'])}}" target="_blank" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'success-mail'])}}" target="_blank" class="dropdown-item">Success Mail</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'login-pin'])}}" target="_blank" class="dropdown-item">Login with PIN</a>
                                    <a href="{{ route('fourth', ['custom', 'authentication', 'auth3', 'delete-account'])}}" target="_blank" class="dropdown-item">Delete Account</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-error" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-alert-hexagon"></i> Error Pages <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-error">
                                    <a href="{{ route('third', ['custom', 'error', '400'])}}" class="dropdown-item">400 - Bad Request</a>
                                    <a href="{{ route('third', ['custom', 'error', '401'])}}" class="dropdown-item">401 - Unauthorized</a>
                                    <a href="{{ route('third', ['custom', 'error', '403'])}}" class="dropdown-item">403 - Forbidden</a>
                                    <a href="{{ route('third', ['custom', 'error', '404'])}}" class="dropdown-item">404 - Not Found</a>
                                    <a href="{{ route('third', ['custom', 'error', '408'])}}" class="dropdown-item">408 - Timeout</a>
                                    <a href="{{ route('third', ['custom', 'error', '500'])}}" class="dropdown-item">500 - Server Error</a>
                                    <a href="{{ route('third', ['custom', 'error', 'maintenance'])}}" class="dropdown-item">Maintenance</a>
                                </div>
                            </div>

                        </div>
                    </li>




