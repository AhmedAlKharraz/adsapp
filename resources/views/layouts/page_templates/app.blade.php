<div class="wrapper ">
  @include('layouts.navbars.sidebar')
  <div class="main-panel">
    @include('layouts.navbars.navs.app')
    @yield('content')
    @include('layouts.footers.app')
  </div>
</div>