<nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100 ">
            <a href="{{ url('/') }}">
                <img class="logo-dark" src="./assets/img/rpl.png" srcset="./assets/img/rpl.png 2x" alt=""
                    style="max-width: 100px; height: auto;" />
                <img class="logo-light" src="./assets/img/rpl.png" srcset="./assets/img/rpl.png 2x" alt=""
                    style="max-width: 100px; height: auto;" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">RPL-Sata</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            style="color: black;">Profile Jurusan</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="./pricing.html"
                                    style="color: black;">Tentang Kami</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="./pricing.html"
                                    style="color: black;">Guru</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="./onepage.html"
                                    style="color: black;">Sarana Prasarana</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}" style="color: black;">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galery') }}" style="color: black;">Galeri</a>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                    <div>
                        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                </div>
                <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
    <div class="container d-flex flex-row py-6">
        <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
        </form>
        <!-- /.search-form -->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- /.container -->
</div>
<!-- /.offcanvas -->
