<x-layouts.web-layouts>
    <div class="content-wrapper">
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 mx-auto">
                        <figure class="mb-10">
                            <img class="img-fluid" src="{{ asset('assets/img/illustrations/404.png') }}" srcset="{{ asset('assets/img/illustrations/404@2x.png') }} 2x" alt="404 Illustration">
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
    </div>
</x-layouts.web-layouts>