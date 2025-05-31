<aside class="app-sidebar sticky" id="sidebar">
  <!-- Sidebar header (logo, etc.) -->
  <div class="main-sidebar-header">
    <a href="{{ url('admin') }}" class="header-logo">
      <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" class="desktop-white" alt="logo">
      <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" class="toggle-white" alt="logo">
      <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" class="desktop-logo" alt="logo">
      <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" class="toggle-dark" alt="logo">
      <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" class="toggle-logo" alt="logo">
      <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" class="desktop-dark" alt="logo">
    </a>
  </div>

  <!-- Actual navigation -->
  <div class="main-sidebar" id="sidebar-scroll">
    <nav class="main-menu-container nav nav-pills flex-column sub-open">
      <!-- left arrow if collapsed -->
      <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path></svg></div>

      <ul class="main-menu">
        <!-- Dashboard header -->
        <li class="slide__category"><span class="category-name">Dashboard</span></li>
        <li class="slide {{ (request()->routeIs('admin.dashboard') || request()->is('/')  ) ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}" class="side-menu__item {{ (request()->routeIs('admin.dashboard') || request()->is('/')  ) ? 'active' : '' }}">
            <span class="shape1"></span>
            <span class="shape2"></span>
            <i class="ti-home side-menu__icon"></i>
            <span class="side-menu__label">Dashboard</span>
          </a>
        </li>

        <!-- Example: Meetings menu -->
        <li class="slide has-sub">
          <a href="javascript:void(0);" class="side-menu__item">
            <span class="shape1"></span>
            <span class="shape2"></span>
            <i class="ti-calendar side-menu__icon"></i>
            <span class="side-menu__label">Meetings</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
          </a>
          <ul class="slide-menu child1">
            <li class="slide side-menu__label1"><a href="javascript:void(0)">Meetings</a></li>
            <li class="slide">
              <a href="{{ route('admin.meetings.index') }}" class="side-menu__item">All Meetings</a>
            </li>
            <li class="slide">
              <a href="{{ route('admin.meetings.create') }}" class="side-menu__item">Create Meeting</a>
            </li>
          </ul>
        </li>

        <!-- Example: Attendance menu -->
        <li class="slide">
          <a href="{{ route('admin.attendance.index') }}" class="side-menu__item">
            <span class="shape1"></span>
            <span class="shape2"></span>
            <i class="ti-check-box side-menu__icon"></i>
            <span class="side-menu__label">Attendance</span>
          </a>
        </li>

        <!-- Example: Members menu -->
        <li class="slide has-sub">
          <a href="javascript:void(0);" class="side-menu__item">
            <span class="shape1"></span>
            <span class="shape2"></span>
            <i class="ti-user side-menu__icon"></i>
            <span class="side-menu__label">Members</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
          </a>
          <ul class="slide-menu child1">
            <li class="slide side-menu__label1"><a href="javascript:void(0)">Members</a></li>
            <li class="slide">
              <a href="{{ route('admin.members.index') }}" class="side-menu__item">All Members</a>
            </li>
            <li class="slide">
              <a href="{{ route('admin.members.create') }}" class="side-menu__item">Add Member</a>
            </li>
          </ul>
        </li>

        <!-- Add other sections exactly as you see in the original HTML -->
        <!-- … -->
      </ul>

      <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg></div>
    </nav>
  </div>
</aside>
