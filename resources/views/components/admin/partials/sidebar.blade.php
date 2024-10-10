<nav id="sidebar">
    <div class="sidebar-content">
      <div class="content-header justify-content-lg-center">
        <div>
          <span class="smini-visible fw-bold tracking-wide fs-lg">
            c<span class="text-primary">b</span>
          </span>
          <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
            <span class="smini-hidden">
              <i class="fa fa-fire text-primary"></i>
              <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
            </span>
          </a>
        </div>
        <div>
          <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
        </div>
      </div>

      <div class="js-sidebar-scroll">
        <div class="content-side content-side-full">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link {{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>

            <li class="nav-main-heading">Interface Setting</li>

            <li class="nav-main-item">
                <a class="nav-main-link {{ request()->routeIs('admin.article') ? 'active' : '' }}" href="{{ route('admin.article') }}">
                  <i class="nav-main-link-icon fa fa-newspaper"></i>
                  <span class="nav-main-link-name">Artikel</span>
                </a>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link {{ request()->routeIs('admin.galery') ? 'active' : '' }}" href="{{ route('admin.galery') }}">
                  <i class="nav-main-link-icon fa fa-image"></i>
                  <span class="nav-main-link-name">Galery</span>
                </a>
            </li>

            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-layer-group"></i>
                <span class="nav-main-link-name">Additional Setting</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link {{ request()->routeIs('admin.sarana') ? 'active' : '' }}" href="{{ route('admin.sarana') }}">
                    <span class="nav-main-link-name">Sarana</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link {{ request()->routeIs('admin.guru') ? 'active' : '' }}" href="{{ route('admin.guru') }}">
                    <span class="nav-main-link-name">Guru</span>
                  </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->routeIs('admin.partner') ? 'active' : '' }}" href="{{ route('admin.partner') }}">
                      <span class="nav-main-link-name">Partner</span>
                    </a>
                </li>
              </ul>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link {{ request()->routeIs('admin.access') ? 'active' : '' }}" href="{{ route('admin.access') }}">
                  <i class="nav-main-link-icon fa fa-user"></i>
                  <span class="nav-main-link-name">Admin Access</span>
                </a>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link {{ request()->routeIs('admin.system') ? 'active' : '' }}" href="{{ route('admin.system') }}">
                  <i class="nav-main-link-icon fa fa-wrench"></i>
                  <span class="nav-main-link-name">System Settings</span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
