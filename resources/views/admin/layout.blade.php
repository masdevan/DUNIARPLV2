<!doctype html>
<html lang="en">
  <head>
    @extends('admin.partials.head')
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!--[ Sidebar Extra Modified ]-->
      @include('admin.partials.sidebar')
      <!-- Header -->
      @include('admin.partials.header')

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>
      </main>

      <!--[ Footer Performed Mode Modified ]-->
      @include('admin.partials.footer')
    </div>
    <!--[ Main Scripting Modified ]-->
    @include('admin.partials.script-manager')
  </body>
</html>
