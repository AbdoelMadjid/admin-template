                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-apps"></i></span>
                            <span class="menu-text">Apps</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route('second', ['apps', 'calendar'])}}" class="dropdown-item"><i class="ti ti-calendar"></i> Calendar</a>
                            <a href="{{ route('second', ['apps', 'chat'])}}" class="dropdown-item"><i class="ti ti-message"></i> Chat</a>
                            <a href="{{route('second', ['apps', 'file-manager'])}}" class="dropdown-item"><i class="ti ti-folder"></i> File Manager</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-basket"></i> Ecommerce <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-ecommerce">
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'products'])}}" class="dropdown-item">Products</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'product-grid'])}}" class="dropdown-item">Products Grid</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'product-details'])}}" class="dropdown-item">Product Details</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'add-product'])}}" class="dropdown-item">Add Product</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'categories'])}}" class="dropdown-item">Categories</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'orders', 'orders'])}}" class="dropdown-item">Orders</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'orders', 'order-details'])}}" class="dropdown-item">Order Details</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'customers'])}}" class="dropdown-item">Customers</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'sellers', 'sellers'])}}" class="dropdown-item">Sellers</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'sellers', 'seller-details'])}}" class="dropdown-item">Sellers Details</a>
                                    <a href="{{ route('third', ['apps', 'ecommerce', 'review'])}}" class="dropdown-item">Reviews</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'reports', 'product-view'])}}" class="dropdown-item">Product Views</a>
                                    <a href="{{ route('fourth', ['apps', 'ecommerce', 'reports', 'sales'])}}" class="dropdown-item">Sales</a>
                                </div>
                            </div>

                            <!-- Email Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-mail"></i> Email <span class="badge text-bg-danger ms-1">New</span> <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-email">
                                    <a href="{{ route('third', ['apps', 'email' ,'inbox'])}}" class="dropdown-item">Inbox</a>
                                    <a href="{{ route('third', ['apps', 'email' ,'details'])}}" class="dropdown-item">Details</a>
                                    <a href="{{ route('third', ['apps', 'email' ,'compose'])}}" class="dropdown-item">Compose</a>
                                </div>
                            </div>

                            <!-- Users Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-users" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-users"></i> Users <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-users">
                                    <a href="{{route('third', ['apps', 'users', 'contacts'])}}" class="dropdown-item">Contacts</a>
                                    <a href="{{route('third', ['apps', 'users', 'roles'])}}" class="dropdown-item">Roles</a>
                                    <a href="{{route('third', ['apps', 'users', 'permissions'])}}" class="dropdown-item">Permissions</a>
                                </div>
                            </div>

                            <!-- Projects Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-projects" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-briefcase"></i> Projects <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-projects">
                                    <a href="{{route('third', ['apps', 'projects', 'index'])}}" class="dropdown-item">My Projects</a>
                                    <a href="{{route('third', ['apps', 'projects', 'list'])}}" class="dropdown-item">Projects List</a>
                                    <a href="{{route('third', ['apps', 'projects', 'details'])}}" class="dropdown-item">View Project</a>
                                    <a href="{{route('third', ['apps', 'projects', 'kanban'])}}" class="dropdown-item">Kanban Board</a>
                                    <a href="{{route('third', ['apps', 'projects', 'team-board'])}}" class="dropdown-item">Team Board</a>
                                    <a href="{{route('third', ['apps', 'projects', 'activity'])}}" class="dropdown-item">Activity Stream</a>
                                </div>
                            </div>

                            <!-- Invoice Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-invoice" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-invoice"></i> Invoice <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-invoice">
                                    <a href="{{ route('third', ['apps', 'invoice', 'index'])}}" class="dropdown-item">Invoices</a>
                                    <a href="{{ route('third', ['apps', 'invoice', 'details'])}}" class="dropdown-item">Single Invoice</a>
                                    <a href="{{ route('third', ['apps', 'invoice', 'create'])}}" class="dropdown-item">New Invoice</a>
                                </div>
                            </div>

                            <!-- Other Apps Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-otherapps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-circle-dashed-plus"></i> Other Apps <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topnav-otherapps">
                                    <a href="{{ route('third', ['apps', 'others', 'companies'])}}" class="dropdown-item">Companies</a>
                                    <a href="{{ route('third', ['apps', 'others', 'clients'])}}" class="dropdown-item">Clients</a>
                                    <a href="{{ route('third', ['apps', 'others', 'outlook'])}}" class="dropdown-item">Outlook View</a>
                                    <a href="{{ route('third', ['apps', 'others', 'vote-list'])}}" class="dropdown-item">Vote List</a>
                                    <a href="{{ route('third', ['apps', 'others', 'issue-tracker'])}}" class="dropdown-item">Issue Tracker</a>
                                    <a href="{{ route('third', ['apps', 'others', 'api-keys'])}}" class="dropdown-item">API Keys</a>
                                    <a href="{{ route('third', ['apps', 'others', 'blog'])}}" class="dropdown-item">Blog</a>
                                    <a href="{{ route('third', ['apps', 'others', 'article'])}}" class="dropdown-item">Article</a>
                                    <a href="{{ route('third', ['apps', 'others', 'pin-board'])}}" class="dropdown-item">Pin Board</a>
                                    <a href="{{ route('third', ['apps', 'others', 'forum-view'])}}" class="dropdown-item">Forum View</a>
                                    <a href="{{ route('third', ['apps', 'others', 'forum-post'])}}" class="dropdown-item">Forum Post</a>
                                </div>
                            </div>
                        </div>
                    </li>




