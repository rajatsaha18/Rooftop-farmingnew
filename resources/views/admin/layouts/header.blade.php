<header class="pc-header">
    <div class="header-wrapper"><!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0"
                        id="sidebar-hide"><i class="ti ti-menu-2"></i></a></li>
                <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0"
                        id="mobile-collapse"><i class="ti ti-menu-2"></i></a></li>
                <li class="pc-h-item d-none d-md-inline-flex">
                    <form class="form-search"><i class="search-icon"><svg class="pc-icon">
                                <use xlink:href="#custom-search-normal-1"></use>
                            </svg> </i><input type="search" class="form-control" placeholder="Ctrl + K">
                    </form>
                </li>
            </ul>
        </div><!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false"><svg class="pc-icon">
                            <use xlink:href="#custom-sun-1"></use>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!"
                            class="dropdown-item" onclick="layout_change('dark')"><svg class="pc-icon">
                                <use xlink:href="#custom-moon"></use>
                            </svg> <span>Dark</span> </a><a href="#!" class="dropdown-item"
                            onclick="layout_change('light')"><svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg> <span>Light</span> </a><a href="#!" class="dropdown-item"
                            onclick="layout_change_default()"><svg class="pc-icon">
                                <use xlink:href="#custom-setting-2"></use>
                            </svg> <span>Default</span></a></div>
                </li>
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false"><svg class="pc-icon">
                            <use xlink:href="#custom-setting-2"></use>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="{{ route('admin.profile.edit') }}"
                            class="dropdown-item"><i class="ti ti-user"></i> <span>Change Password</span> </a><a
                            href="#!" class="dropdown-item"><i class="ti ti-settings"></i>
                            <span>Settings</span> </a><a href="#!" class="dropdown-item"><i
                                class="ti ti-headset"></i> <span>Support</span> </a><a href="#!"
                            class="dropdown-item"><i class="ti ti-lock"></i> <span>Lock Screen</span> </a><a
                            href="#!" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="dropdown-item"><i class="ti ti-power"></i>
                            <span>Logout</span></a></div>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                @csrf

                            </form>
                </li>
                <li class="pc-h-item"><a href="#" class="pc-head-link me-0" data-bs-toggle="offcanvas"
                        data-bs-target="#announcement" aria-controls="announcement"><svg class="pc-icon">
                            <use xlink:href="#custom-flash"></use>
                        </svg></a></li>
                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false"><svg class="pc-icon">
                            <use xlink:href="#custom-notification"></use>
                        </svg> <span class="badge bg-success pc-h-badge">3</span></a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Notifications</h5><a href="#!"
                                class="btn btn-link btn-sm">Mark all read</a>
                        </div>
                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                            style="max-height: calc(100vh - 215px)">
                            <p class="text-span">Today</p>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><svg class="pc-icon text-primary">
                                                <use xlink:href="#custom-layer"></use>
                                            </svg></div>
                                        <div class="flex-grow-1 ms-3"><span
                                                class="float-end text-sm text-muted">2 min ago</span>
                                            <h5 class="text-body mb-2">UI/UX Design</h5>
                                            <p class="mb-0">Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><svg class="pc-icon text-primary">
                                                <use xlink:href="#custom-sms"></use>
                                            </svg></div>
                                        <div class="flex-grow-1 ms-3"><span
                                                class="float-end text-sm text-muted">1 hour ago</span>
                                            <h5 class="text-body mb-2">Message</h5>
                                            <p class="mb-0">Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-span">Yesterday</p>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><svg class="pc-icon text-primary">
                                                <use xlink:href="#custom-document-text"></use>
                                            </svg></div>
                                        <div class="flex-grow-1 ms-3"><span
                                                class="float-end text-sm text-muted">2 hour ago</span>
                                            <h5 class="text-body mb-2">Forms</h5>
                                            <p class="mb-0">Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><svg class="pc-icon text-primary">
                                                <use xlink:href="#custom-user-bold"></use>
                                            </svg></div>
                                        <div class="flex-grow-1 ms-3"><span
                                                class="float-end text-sm text-muted">12 hour ago</span>
                                            <h5 class="text-body mb-2">Challenge invitation</h5>
                                            <p class="mb-2"><span class="text-dark">Jonny aber</span> invites
                                                to join the challenge</p><button
                                                class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                                            <button class="btn btn-sm btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><svg class="pc-icon text-primary">
                                                <use xlink:href="#custom-security-safe"></use>
                                            </svg></div>
                                        <div class="flex-grow-1 ms-3"><span
                                                class="float-end text-sm text-muted">5 hour ago</span>
                                            <h5 class="text-body mb-2">Security</h5>
                                            <p class="mb-0">Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center py-2"><a href="#!" class="link-danger">Clear all
                                Notifications</a></div>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile"><a
                        class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                        aria-expanded="false"><img src="{{asset('public/admin')}}/assets/images/user/avatar-2.jpg" alt="user-image"
                            class="user-avtar"></a>

                </li>
            </ul>
        </div>
    </div>
</header>


