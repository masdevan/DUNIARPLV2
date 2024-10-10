<!doctype html>
<html lang="en">
  <head>
    <x-admin.partials.head/>
    <title> | {{ $title }}</title>
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!--[ Sidebar Extra Modified ]-->
      <x-admin.partials.sidebar/>
      <!-- Header -->
      <x-admin.partials.header/>
      
      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          {{ $slot }}
        </div>
      </main>
      
      <!--[ Footer Performed Mode Modified ]-->
      <x-admin.partials.footer/>
    </div>
    <!--[ Main Scripting Modified ]-->
    <x-admin.partials.script-manager/>
  </body>
</html>
