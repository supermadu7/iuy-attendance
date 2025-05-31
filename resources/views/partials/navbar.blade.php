<header class="app-header">
  <div class="main-header-container container-fluid">
    <div class="header-content-left">
      
      {{-- Logo --}}
      <div class="header-element">
        <div class="horizontal-logo">
          <a href="{{ url('/') }}" class="header-logo">
            <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
            <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
            <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
            <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
            <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">
            <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo" class="toggle-white">
          </a>
        </div>
      </div>

      {{-- Sidebar toggle --}}
      <div class="header-element">
        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
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
          <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
          <button class="btn btn-primary"><i class="fe fe-search" aria-hidden="true"></i></button>
        </div>
        <div id="headersearch" class="header-search">
          <!-- … (search dropdown markup) … -->
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
        <a href="javascript:void(0);" class="header-link dropdown-toggle country-Flag" data-bs-auto-close="outside" data-bs-toggle="dropdown">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- …flag SVG… --></svg>
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
        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
          <i class="fe fe-shopping-cart header-link-icon"></i>
          <span class="badge bg-primary header-icon-badge" id="cart-icon-badge">5</span>
        </a>
        <div class="main-header-dropdown dropdown-menu dropdown-menu-end">
          {{-- …cart items markup… --}}
        </div>
      </div>

      {{-- Notifications dropdown --}}
      <div class="header-element notifications-dropdown">
        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown">
          <i class="fe fe-bell header-link-icon"></i>
          <span class="badge bg-secondary header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span>
        </a>
        <div class="main-header-dropdown dropdown-menu dropdown-menu-end">
          {{-- …notifications markup… --}}
        </div>
      </div>

      {{-- Shortcuts dropdown --}}
      <div class="header-element header-shortcuts-dropdown d-xl-flex d-none">
        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="notificationDropdown">
          <i class="fe fe-grid header-link-icon"></i>
        </a>
        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end">
          {{-- …shortcuts markup… --}}
        </div>
      </div>

      {{-- User profile dropdown --}}
      <div class="header-element">
        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside">
          <div class="d-flex align-items-center">
            <div class="header-link-icon">
              <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="img" width="32" height="32" class="rounded-circle">
            </div>
            <div class="d-none">
              <p class="fw-semibold mb-0">Angelica</p>
              <span class="op-7 fw-normal d-block fs-11">Web Designer</span>
            </div>
          </div>
        </a>
        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end">
          <li>
            <div class="header-navheading border-bottom">
              <h6 class="main-notification-title">Sonia Taylor</h6>
              <p class="main-notification-text mb-0">Web Designer</p>
            </div>
          </li>
          <li><a class="dropdown-item d-flex border-bottom" href="profile.html"><i class="fe fe-user fs-16 align-middle me-2"></i>Profile</a></li>
          <li><a class="dropdown-item d-flex border-bottom" href="mail-inbox.html"><i class="fe fe-inbox fs-16 align-middle me-2"></i>Inbox <span class="badge bg-success ms-auto">25</span></a></li>
          <li><a class="dropdown-item d-flex border-bottom border-block-end" href="notifications-list.html"><i class="fe fe-compass fs-16 align-middle me-2"></i>Activity</a></li>
          <li><a class="dropdown-item d-flex border-bottom" href="settings.html"><i class="fe fe-settings fs-16 align-middle me-2"></i>Settings</a></li>
          <li><a class="dropdown-item d-flex border-bottom" href="chat.html"><i class="fe fe-headphones fs-16 align-middle me-2"></i>Support</a></li>
          <li><a class="dropdown-item d-flex" href="signin.html"><i class="fe fe-power fs-16 align-middle me-2"></i>Log Out</a></li>
        </ul>
      </div>

      {{-- Right‐sidebar toggle --}}
      <div class="header-element right-sidebar d-xl-flex d-none">
        <a href="javascript:void(0);" class="header-link right-sidebar" data-bs-toggle="offcanvas" data-bs-target="#right-sidebar-canvas">
          <i class="fe fe-align-right header-icons header-link-icon"></i>
        </a>
      </div>

      {{-- Switcher icon --}}
      <div class="header-element">
        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
          <i class="fe fe-settings header-link-icon"></i>
        </a>
      </div>
    </div><!-- /.header-content-right -->
  </div><!-- /.main-header-container -->
</header>
