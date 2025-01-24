<aside id="sidebar" class="sidebar-toggle">
    <div class="sidebar-logo mb-2 w-100 d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/images/college.jpg') }}" alt="library-logo">
    </div>

    <!-- Sidebar Navigation -->
    <ul class="sidebar-nav m-0 p-0">
        <li class="sidebar-header text-uppercase">
            Main Navigation
        </li>
        <li class="sidebar-item">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active':'' }}">
                <i class="bi bi-box-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('admin.book') }}" class="sidebar-link {{ request()->routeIs('admin.book') ? 'active' : '' }}">
                <i class="bi bi-book-fill"></i>
                <span>Books</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('admin.member') }}" class="sidebar-link {{ request()->routeIs('admin.member') ? 'active' : '' }}">
                <i class="bi bi-people-fill"></i>
                <span>Members</span>
            </a>
        </li>

        <li class="sidebar-header text-uppercase">
            Sub menu
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link {{ request()->routeIs('admin.bookReport') || request()->routeIs('admin.damagedBooks') || request()->routeIs('admin.memberReport') || request()->routeIs('admin.auditLog') ? '' : 'collapsed' }} collapsed" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="false" aria-controls="report">
                <i class="lni lni-protection"></i>
                <span>Reports</span>
            </a>
            <ul id="report" class="sidebar-dropdown {{ request()->routeIs('admin.bookReport') || request()->routeIs('admin.damagedBooks') || request()->routeIs('admin.memberReport') || request()->routeIs('admin.auditLog') ? 'show' : '' }} list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="{{ route('admin.bookReport') }}" class="sidebar-link {{ request()->routeIs('admin.bookReport') ? 'active' : '' }}">
                        <i class="bi bi-bookmark-fill"></i>
                        Books Report
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.damagedBooks') }}" class="sidebar-link {{ request()->routeIs('admin.damagedBooks') ? 'active' : '' }}">
                        <i class="bi bi-journal-x"></i>
                        Damaged Books
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.memberReport') }}" class="sidebar-link {{ request()->routeIs('admin.memberReport') ? 'active' : '' }}">
                        <i class="bi bi-person-lines-fill"></i>
                        Members Report
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('admin.auditLog') }}" class="sidebar-link {{ request()->routeIs('admin.auditLog') ? 'active' : '' }}">
                        <i class="bi bi-newspaper"></i>
                        Audit Log
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>