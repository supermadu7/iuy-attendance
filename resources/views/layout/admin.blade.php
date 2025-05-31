{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="en" dir="ltr" 
      data-nav-layout="vertical" 
      data-theme-mode="light" 
      data-header-styles="light" 
      data-menu-styles="dark" 
      data-toggled="close">
<head>
    @include('partials.head')
</head>
<body>
    {{-- Offcanvas switcher (if you want it on every page) --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
      {{-- … (you could move this into a partial if you prefer) … --}}
    </div>
    {{-- Loader (if used site-wide) --}}
    <div id="loader">
      <img src="{{ asset('assets/images/media/media-79.svg') }}" alt="">
    </div>

    <div class="page">
      {{-- Navbar / top header --}}
      @include('partials.navbar')

      {{-- Sidebar --}}
      @include('partials.sidebar')

      {{-- Main content area --}}
      <div class="main-content app-content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div><!-- /.main-content -->

      {{-- Footer --}}
      @include('partials.footer')
    </div><!-- /.page -->

    {{-- Scroll to Top, Overlay, etc. can go here if needed --}}
    <div class="scrollToTop">
      <span class="arrow"><i class="fe fe-arrow-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    {{-- All JS includes --}}
    @include('partials.scripts')
</body>
</html>
