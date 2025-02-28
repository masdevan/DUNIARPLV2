<x-layouts.web-layouts>
    <div class="content-wrapper">
        <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
            style="background-image: url('{{ asset('assets/img/photos/bg18.png') }}');">
            <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-1 mb-3">Sign in</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                            </ol>
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
                        <div class="card">
                            <div class="card-body p-11 text-center">
                                <h2 class="mb-3 text-start">Selamat datang Kembali</h2>
                                <p class="lead mb-6 text-start">Masukkan Email dan Password untuk Sign in.</p>

                                <!-- Form -->
                                <form action="{{ route('login') }}" method="POST" class="text-start mb-3">
                                    @csrf
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" placeholder="Email" id="loginEmail"
                                            name="email" required>
                                        <label for="loginEmail">Email</label>
                                    </div>
                                    <div class="form-floating password-field mb-4">
                                        <input type="password" class="form-control" placeholder="Password"
                                            id="loginPassword" name="password" required>
                                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                        <label for="loginPassword">Password</label>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign in</button>
                                </form>
                                <!-- /form -->

                                <!-- Daftar Link -->
                                <p class="mb-0">Belum punya akun? <a href="{{ route('register') }}" class="hover">Sign Up</a></p>

                                <!-- Social Media Login -->
                                <div class="divider-icon my-4">atau</div>
                                <nav class="nav social justify-content-center text-center">
                                    <a href="#" class="btn btn-circle btn-sm btn-google"><i
                                            class="uil uil-google"></i></a>
                                    <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                                            class="uil uil-facebook-f"></i></a>
                                    <a href="#" class="btn btn-circle btn-sm btn-twitter"><i
                                            class="uil uil-twitter"></i></a>
                                </nav>
                                <!--/.social -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
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
</x-layouts.web-layouts>
