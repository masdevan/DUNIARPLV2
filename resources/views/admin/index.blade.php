<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ADMIN CONTROL PANEL</title>
    <meta name="description" content="ADMIN DASHBOARD RPLV2">
    <meta name="author" content="DASHBOARD">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="ADMIN DASHBOARD RPLV2">
    <meta property="og:site_name" content="DASHBOARD">
    <meta property="og:description" content="ADMIN DASHBOARD RPLV2">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/c27bad3882.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

      <!--[ Sidebar Extra Modified ]-->
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
                  <a class="nav-main-link" href="be_pages_dashboard.html">
                    <i class="nav-main-link-icon fa fa-house-user"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-heading">User Interface</li>

                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-layer-group"></i>
                    <span class="nav-main-link-name">Elements</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_grid.html">
                        <span class="nav-main-link-name">Grid</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_icons.html">
                        <span class="nav-main-link-name">Icons</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon fa fa-layer-group"></i>
                      <span class="nav-main-link-name">Elements</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_grid.html">
                          <span class="nav-main-link-name">Grid</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_ui_icons.html">
                          <span class="nav-main-link-name">Icons</span>
                        </a>
                      </li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <!-- Header -->
      <header id="page-header">
        <div class="content-header">
            <!--[ Left Header Modified ]-->
            <div class="space-x-1">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <!--[ Right Header Modified ]-->
            <div class="space-x-1">
                <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block fw-semibold">J. Smith</span>
                    <i class="fa fa-angle-down opacity-50 ms-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="px-2 py-3 bg-body-light rounded-top">
                    <h5 class="h6 text-center mb-0">
                        John Smith
                    </h5>
                    </div>
                    <div class="p-2">
                    <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_profile.html">
                        <span>Profile</span>
                        <i class="fa fa-fw fa-user opacity-25"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                        <span>Inbox</span>
                        <i class="fa fa-fw fa-envelope-open opacity-25"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_invoice.html">
                        <span>Invoices</span>
                        <i class="fa fa-fw fa-file opacity-25"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="op_auth_signin.html">
                        <span>Sign Out</span>
                        <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </header>

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            test
        </div>
      </main>

      <!--[ Footer Performed Mode Modified ]-->
      <footer id="page-footer">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              CRAFTED BY <i class="fa fa-heart text-danger"></i> SMKN 1 TENGARAN</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">DUNIARPLV2 </a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!--[ Main Scripting Modified ]-->
    @vite(['resources/js/app.js'])
  </body>
</html>