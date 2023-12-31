<nav class="header-navbar arun navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow  container-xxl">
  <div class="navbar-container d-flex content">
    <ul class="nav navbar-nav align-items-center ms-auto">
      <li class="nav-item dropdown dropdown-user">
        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true">
          <div class="user-nav d-sm-flex d-none">
            <span class="user-name fw-bolder">
              @if (Auth::check())
              {{ Auth::user()->name }}
              @else
              John Doe
              @endif
            </span>
            <span class="user-status">
              Admin
            </span>
          </div>
          <span class="avatar">
            <img class="round" src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40">
            <span class="avatar-status-online"></span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
          <h6 class="dropdown-header">Manage Profile</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ Route::has('profile.show') ? route('profile.show') : 'javascript:void(0)' }}">
            <i class="me-50" data-feather="user"></i> Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="me-50" data-feather="settings"></i> Settings
          </a>
          @if (Auth::check())
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="me-50" data-feather="power"></i> Logout
          </a>
          <form method="POST" id="logout-form" action="{{ route('logout') }}">
            @csrf
          </form>
          @else
          <a class="dropdown-item" href="{{ Route::has('login') ? route('login') : 'javascript:void(0)' }}">
            <i class="me-50" data-feather="log-in"></i> Login
          </a>
          @endif
        </div>
      </li>
    </ul>
  </div>
</nav>