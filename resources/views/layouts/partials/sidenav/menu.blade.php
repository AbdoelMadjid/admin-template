<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
        <span class="menu-text" data-lang="dashboards">Dashboards (Template)</span>
        <span class="badge bg-secondary">Template</span>
    </a>
    <div class="collapse" id="sidebarDashboards">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('second', ['dashboards', 'index']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="dashboard-one">Dashboard v.1</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['dashboards', 'index-2']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="dashboard-two">Dashboard v.2</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('second', ['dashboards', 'index-3']) }}" class="side-nav-link">
                    <span class="menu-text" data-lang="dashboard-three">Dashboard v.3</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#!" class="side-nav-link disabled">
                    <span class="menu-text" data-lang="dashboard-four">Dashboard v.4</span>
                    <span class="badge text-bg-light opacity-50" data-lang="dashboard-soon">soon</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#!" class="side-nav-link disabled">
                    <span class="menu-text" data-lang="dashboard-five">Dashboard v.5</span>
                    <span class="badge text-bg-light opacity-50" data-lang="dashboard-soon">soon</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="{{ route('any', ['landing']) }}" target="_blank" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-stack-front"></i></span>
        <span class="menu-text" data-lang="landing-page">Landing Page</span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('second', ['docs', 'index']) }}" target="_blank" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-file-type-doc"></i></span>
        <span class="menu-text" data-lang="documentation">Documentation</span>
        <span class="badge text-bg-danger">New</span>
    </a>
</li>
