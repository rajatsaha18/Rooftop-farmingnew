<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header"><a href="index.html"
                class="b-brand text-primary"><!-- ========   Change your logo from here   ============ --> <img
                    src="https://ableproadmin.com/assets/images/logo-dark.svg" class="img-fluid logo-lg"
                    alt="logo"> <span
                    class="badge bg-light-success rounded-pill ms-2 theme-version">v9.4.3</span></a></div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('public/admin')}}/assets/images/user/avatar-1.jpg" alt="user-image"
                                class="user-avtar wid-45 rounded-circle"></div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">Jonh Smith</h6><small>Administrator</small>
                        </div><a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink"><svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg></a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3"><a href="#!"><i class="ti ti-user"></i> <span>My Account</span>
                            </a><a href="#!"><i class="ti ti-settings"></i> <span>Settings</span> </a><a
                                href="#!"><i class="ti ti-lock"></i> <span>Lock Screen</span> </a><a
                                href="#!"><i class="ti ti-power"></i> <span>Logout</span></a></div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Navigation</label></li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                class="pc-icon">
                                <use xlink:href="#custom-status-up"></use>
                            </svg> </span><span class="pc-mtext">Dashboard</span> <span class="pc-arrow"><i
                                data-feather="chevron-right"></i></span> <span class="pc-badge">2</span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="index.html">Default</a></li>
                        <li class="pc-item"><a class="pc-link" href="analytics.html">Analytics</a></li>
                        <li class="pc-item"><a class="pc-link" href="finance.html">Finance</a></li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                class="pc-icon">
                                <use xlink:href="#custom-document"></use>
                            </svg> </span><span class="pc-mtext">Layouts</span> <span class="pc-arrow"><i
                                data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/demo/layout-vertical.html">Vertical</a></li>
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/demo/layout-horizontal.html">Horizontal</a></li>
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/demo/layout-color-header.html">Layouts 2</a></li>
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/demo/layout-compact.html">Compact</a></li>
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/demo/layout-tab.html">Tab</a></li>
                    </ul>
                </li>
                <li class="pc-item pc-caption"><label>Widget</label> <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg></li>
                <li class="pc-item"><a href="https://ableproadmin.com/widget/w_statistics.html"
                        class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-story"></use>
                            </svg> </span><span class="pc-mtext">Statistics</span></a></li>
                <li class="pc-item"><a href="https://ableproadmin.com/widget/w_data.html" class="pc-link"><span
                            class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-fatrows"></use>
                            </svg> </span><span class="pc-mtext">Data</span></a></li>
                <li class="pc-item"><a href="https://ableproadmin.com/widget/w_chart.html" class="pc-link"><span
                            class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-presentation-chart"></use>
                            </svg> </span><span class="pc-mtext">Chart</span></a></li>
                <li class="pc-item pc-caption"><label>Admin Panel</label> <svg class="pc-icon">
                        <use xlink:href="#custom-layer"></use>
                    </svg></li>
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><svg
                                class="pc-icon">
                                <use xlink:href="#custom-layer"></use>
                            </svg> </span><span class="pc-mtext">Blog</span> <span class="pc-arrow"><i
                                data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/admins/course-dashboard.html">Add Blog</a>
                        </li>
                        <li class="pc-item"><a class="pc-link"
                                href="https://ableproadmin.com/admins/course-dashboard.html">Manage Blog</a>
                        </li>

                    </ul>
                </li>

                <li class="pc-item"><a href="{{ route('dashboard.member') }}"
                        class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-notification-status"></use>
                            </svg> </span><span class="pc-mtext">Member List</span></a></li>
            </ul>
        </div>
    </div>
</nav>
