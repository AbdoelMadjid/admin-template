<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
        <span class="menu-text"> Dashboard </span>
    </a>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-dashboards" data-bs-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="false">
        <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
        <span class="menu-text"> Dashboards (Template) </span>
        <div class="menu-arrow"></div>
    </a>
    <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
        <a href="{{ route('second', ['dashboards', 'index']) }}" class="dropdown-item">Dashboard
            v.1</a>
        <a href="{{ route('second', ['dashboards', 'index-2']) }}" class="dropdown-item">Dashboard
            v.2</a>
        <a href="{{ route('second', ['dashboards', 'index-3']) }}" class="dropdown-item">Dashboard
            v.3</a>
        <a href="#!" class="dropdown-item disabled">Dashboard v.4 <span
                class="badge text-bg-light opacity-50">soon</span></a>
        <a href="#!" class="dropdown-item disabled">Dashboard v.5 <span
                class="badge text-bg-light opacity-50">soon</span></a>
    </div>
</li>
