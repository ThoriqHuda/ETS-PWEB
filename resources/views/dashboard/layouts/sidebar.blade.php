<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/menu') ? 'active' : '' }}" href="/dashboard/menu">
            <span data-feather="shopping-cart"></span>
            Menu
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/review">
            <span data-feather="file"></span>
            Reviews
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" href="/dashboard/user">
            <span data-feather="users"></span>
            Account
          </a>
        </li>
        
      </ul>
      
@can('admin')

<h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
  <span>Administrator</span>
</h6>
<ul class="nav flex-column">
  
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/menu') ? 'active' : '' }}" href="/dashboard/menu">
      <span data-feather="grid"></span>
      Add Menu
    </a>
  </li>
</ul>
@endcan


    </div>
  </nav>