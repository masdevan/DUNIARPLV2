<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- 404 Content -->
    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 mx-auto">
                    <figure class="mb-10">
                        <img class="img-fluid" src="{{ asset('assets/ilustrations/404.png') }}" srcset="{{ asset('assets/ilustrations/404@2x.png') }} 2x" alt="404 Illustration">
                    </figure>
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
</body>

</html>