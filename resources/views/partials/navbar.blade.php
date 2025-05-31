<header class="app-header">
    <div class="main-header-container container-fluid">
        <div class="header-content-left">

            {{-- Logo --}}
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                            class="desktop-logo">
                        <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                            class="toggle-logo">
                        <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                            class="desktop-dark">
                        <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                            class="toggle-dark">
                        <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                            class="desktop-white">
                        <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                            class="toggle-white">
                    </a>
                </div>
            </div>

            {{-- Sidebar toggle --}}
            <div class="header-element">
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);">
                    <span></span>
                </a>
            </div>

            {{-- (Optional) Search bar on large screens --}}
            <div class="main-header-center d-none d-lg-block header-link">
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <select class="js-example-basic-single" name="state" data-trigger>
                            <option value="s-1">Choose one</option>
                            <option value="s-2">T-Projects...</option>
                            <option value="s-3">Microsoft Project</option>
                            <option value="s-4">Risk Management</option>
                            <option value="s-5">Team Building</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" id="typehead" placeholder="Search for results..."
                        autocomplete="off">
                    <button class="btn btn-primary"><i class="fe fe-search" aria-hidden="true"></i></button>
                </div>
                <div id="headersearch" class="header-search">
                    <div class="p-3">
                        <div class="">
                            <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                            <div class="ps-2">
                                <a href="javascript:void(0)" class="search-tags"><i
                                        class="fe fe-search me-2"></i>People<span></span></a>
                                <a href="javascript:void(0)" class="search-tags"><i
                                        class="fe fe-search me-2"></i>Pages<span></span></a>
                                <a href="javascript:void(0)" class="search-tags"><i
                                        class="fe fe-search me-2"></i>Articles<span></span></a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                            <ul class="ps-2 list-unstyled">
                                <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                    <a href="full-calendar.html"><span><i
                                                class='bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Calendar</span></a>
                                </li>
                                <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                    <a href="mail-inbox.html"><span><i
                                                class='bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle'></i>Mail</span></a>
                                </li>
                                <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                    <a href="buttons.html"><span><i
                                                class='bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Buttons</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                            <ul class="ps-2 list-unstyled">
                                <li class="p-1 align-items-center text-muted mb-1 search-app">
                                    <a href="javascript:void(0)"
                                        class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                </li>
                                <li class="p-1 align-items-center text-muted mb-1 search-app">
                                    <a href="javascript:void(0)"
                                        class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-3 border-top px-0">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="text-primary text-decoration-underline fs-15">View
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-content-left -->

        <div class="header-content-right">
            {{-- Theme toggle --}}
            <div class="header-element header-theme-mode">
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout"><i class="fe fe-moon header-link-icon lh-2"></i></span>
                    <span class="dark-layout"><i class="fe fe-sun header-link-icon lh-2"></i></span>
                </a>
            </div>

            {{-- Language selector --}}
            <div class="header-element country-selector">
                <a href="javascript:void(0);" class="header-link dropdown-toggle country-Flag"
                    data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                            <g fill="#0052b4">
                                <path
                                    d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                            </g>
                            <g fill="#d80027">
                                <path
                                    d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                                <path
                                    d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                            </g>
                        </svg>
                    </span>
                </a>
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('assets/images/flags/6.jpg') }}" alt="img">
                            </span>
                            English
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="{{ asset('assets/images/flags/5.jpg') }}" alt="img">
                            </span>
                            Spanish
                        </a>
                    </li>
                    <!-- … more languages … -->
                </ul>
            </div>

            {{-- Fullscreen --}}
            <div class="header-element header-fullscreen d-xl-flex d-none">
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <i class="fe fe-maximize full-screen-open header-link-icon"></i>
                    <i class="fe fe-minimize full-screen-close header-link-icon d-none"></i>
                </a>
            </div>

            {{-- Cart dropdown --}}
            <div class="header-element cart-dropdown d-xl-flex d-none">
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <i class="fe fe-shopping-cart header-link-icon"></i>
                    <span class="badge bg-primary header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end">
                    {{-- …cart items markup… --}}
                </div>
            </div>

            {{-- Notifications dropdown --}}
            <div class="header-element notifications-dropdown">
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="messageDropdown">
                    <i class="fe fe-bell header-link-icon"></i>
                    <span class="badge bg-secondary header-icon-badge pulse pulse-secondary"
                        id="notification-icon-badge">5</span>
                </a>
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end">
                    {{-- …notifications markup… --}}
                </div>
            </div>

            {{-- Shortcuts dropdown --}}
            <div class="header-element header-shortcuts-dropdown d-xl-flex d-none">
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="notificationDropdown">
                    <i class="fe fe-grid header-link-icon"></i>
                </a>
                <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end">
                    {{-- …shortcuts markup… --}}
                </div>
            </div>

            {{-- User profile dropdown --}}
            <div class="header-element">
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="d-flex align-items-center">
                        <div class="header-link-icon">
                            <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="img" width="32"
                                height="32" class="rounded-circle">
                        </div>
                        <div class="d-none">
                            <p class="fw-semibold mb-0">Angelica</p>
                            <span class="op-7 fw-normal d-block fs-11">Web Designer</span>
                        </div>
                    </div>
                </a>
                <ul
                    class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end">
                    <li>
                        <div class="header-navheading border-bottom">
                            <h6 class="main-notification-title">Sonia Taylor</h6>
                            <p class="main-notification-text mb-0">Web Designer</p>
                        </div>
                    </li>
                    <li><a class="dropdown-item d-flex border-bottom" href="profile.html"><i
                                class="fe fe-user fs-16 align-middle me-2"></i>Profile</a></li>
                    <li><a class="dropdown-item d-flex border-bottom" href="mail-inbox.html"><i
                                class="fe fe-inbox fs-16 align-middle me-2"></i>Inbox <span
                                class="badge bg-success ms-auto">25</span></a></li>
                    <li><a class="dropdown-item d-flex border-bottom border-block-end"
                            href="notifications-list.html"><i
                                class="fe fe-compass fs-16 align-middle me-2"></i>Activity</a></li>
                    <li><a class="dropdown-item d-flex border-bottom" href="settings.html"><i
                                class="fe fe-settings fs-16 align-middle me-2"></i>Settings</a></li>
                    <li><a class="dropdown-item d-flex border-bottom" href="chat.html"><i
                                class="fe fe-headphones fs-16 align-middle me-2"></i>Support</a></li>
                    <li><a class="dropdown-item d-flex" href="signin.html"><i
                                class="fe fe-power fs-16 align-middle me-2"></i>Log Out</a></li>
                </ul>
            </div>

            {{-- Right‐sidebar toggle --}}
            <div class="header-element right-sidebar d-xl-flex d-none">
                <a href="javascript:void(0);" class="header-link right-sidebar" data-bs-toggle="offcanvas"
                    data-bs-target="#right-sidebar-canvas">
                    <i class="fe fe-align-right header-icons header-link-icon"></i>
                </a>
            </div>

            {{-- Switcher icon --}}
            <div class="header-element">
                <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas">
                    <i class="fe fe-settings header-link-icon"></i>
                </a>
            </div>
        </div><!-- /.header-content-right -->
    </div><!-- /.main-header-container -->
</header>
