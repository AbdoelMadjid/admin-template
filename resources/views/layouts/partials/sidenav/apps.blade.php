<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-basket"></i></span>
        <span class="menu-text" data-lang="ecommerce">Ecommerce</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarEcommerce">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProducts" aria-expanded="false"
                    aria-controls="sidebarProducts" class="side-nav-link">
                    <span class="menu-text" data-lang="eco-products">Products</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProducts">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'products']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-pro-list">Products</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'product-grid']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-pro-grid">Products Grid</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'product-details']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-pro-details">Product Details</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'products', 'add-product']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-pro-add">Add Product</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'ecommerce', 'categories']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="eco-categories">Categories</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarOrders" aria-expanded="false" aria-controls="sidebarOrders"
                    class="side-nav-link">
                    <span class="menu-text" data-lang="eco-orders">Orders</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarOrders">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'orders', 'orders']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-orders-list">Orders</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'orders', 'order-details']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-order-details">Order Details</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'ecommerce', 'customers']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="eco-customers">Customers</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSellers" aria-expanded="false" aria-controls="sidebarSellers"
                    class="side-nav-link">
                    <span class="menu-text" data-lang="eco-sellers"> Sellers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSellers">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'sellers', 'sellers']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-sellers-list">Sellers</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'sellers', 'seller-details']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-sellers-details">Sellers
                                    Details</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'ecommerce', 'review']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="eco-reviews">Reviews</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarReports" aria-expanded="false"
                    aria-controls="sidebarReports" class="side-nav-link">
                    <span class="menu-text" data-lang="eco-reports"> Reports </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarReports">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'reports', 'product-view']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-pro-views">Product Views</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('fourth', ['apps', 'ecommerce', 'reports', 'sales']) }}"
                                class="side-nav-link">
                                <span class="menu-text" data-lang="eco-pro-sales">Sales</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-mail"></i></span>
        <span class="menu-text" data-lang="email">Email</span>
        <span class="badge text-bg-danger">New</span>
    </a>
    <div class="collapse" id="sidebarEmail">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'email', 'inbox']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="email-inbox">Inbox</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'email', 'details']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="email-details">Details</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'email', 'compose']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="email-compose">Compose</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-users"></i></span>
        <span class="menu-text" data-lang="users"> Users </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarUsers">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'users', 'contacts']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="contacts">Contacts</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'users', 'roles']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="roles">Roles</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'users', 'permissions']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="permissions">Permissions</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
        <span class="menu-text" data-lang="projects"> Projects </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarProjects">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'projects', 'index']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="projects">My Projects</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'projects', 'list']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="projects-list">Projects List</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'projects', 'details']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="project-details">View Project</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'projects', 'kanban']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="project-kanban">Kanban Board</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'projects', 'team-board']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="project-team-board">Team Board</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'projects', 'activity']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="project-activity">Activity Steam</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="{{ route('second', ['apps', 'file-manager']) }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-folder"></i></span>
        <span class="menu-text" data-lang="file-manager"> File Manager </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('second', ['apps', 'chat']) }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-message-dots"></i></span>
        <span class="menu-text" data-lang="chat"> Chat </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('second', ['apps', 'calendar']) }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-calendar"></i></span>
        <span class="menu-text" data-lang="calendar"> Calendar </span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-invoice"></i></span>
        <span class="menu-text" data-lang="invoice"> Invoice</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarInvoice">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'invoice', 'index']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="invoices">Invoices</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'invoice', 'details']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="invoice-details">Single Invoice</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'invoice', 'create']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="invoice-create">New Invoice</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarOtherApps" aria-expanded="false" aria-controls="sidebarOtherApps"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-apps"></i></span>
        <span class="menu-text" data-lang="otherapps"> Other Apps </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarOtherApps">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'companies']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="companies">Companies</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'clients']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="clients">Clients</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'outlook']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="outlook">Outlook View</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'vote-list']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="vote-list">Vote List</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'issue-tracker']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="issue-tracker">Issue Tracker</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'api-keys']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="api-keys">API Keys</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'blog']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="blog">Blog</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'article']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="article">Article</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'pin-board']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="pin-board">Pin Board</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'forum-view']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="forum-view">Forum View</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('third', ['apps', 'others', 'forum-post']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="forum-post">Forum Post</span>
                </a>
            </li>
        </ul>
    </div>
</li>
