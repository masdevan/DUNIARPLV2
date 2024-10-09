<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <div class="content-wrapper">
    <!-- /header -->
    <section class="wrapper bg-light">
      <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-9 col-xl-8 mx-auto">
            <figure class="mb-10"><img class="img-fluid" src="./assets/img/illustrations/404.png" srcset="./assets/img/illustrations/404@2x.png 2x" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
            <h1 class="mb-3">Oops! Halaman tidak dapat ditemukan.</h1>
            <p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">Halaman yang anda cari tidak tersedia. Coba cari halaman baru atau kembali ke beranda dengan tombol dibawah ini.</p>
            <a href="{{ url('/') }}" class="btn btn-primary rounded-pill">Pergi ke beranda</a>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>