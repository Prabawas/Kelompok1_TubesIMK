 <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div
                class="
                    container
                    d-flex
                    align-items-center
                    justify-content-center justify-content-md-between
                "
            >
                <div class="align-items-center d-none d-md-flex">
                    <i class="bi bi-clock"></i> Senin - Sabtu, 04.00 - 07.00 WIB
                </div>
                <div class="d-flex align-items-center" >
                    <i class="bi bi-phone" id="noHp">Kontak 0852-6901-5132</i> 
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <!-- <a href="index.html" class="logo me-auto"
                    ><img src="{{ asset('guest/img/logo.png')}}" alt=""
                /></a> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

                <nav id="navbar" class="navbar order-last order-lg-0 me-auto">
                    <ul>
                        <li>
                            <a id="buttonHeader" class="nav-link scrollto {{ Request::is('/*') ? 'active' : ''}}" href="/">Beranda</a>
                        </li>
                        <li>
                            <a id="buttonHeader" class="nav-link scrollto {{ Request::is('pelayanan*') ? 'active' : ''}}" href="/pelayanan"
                                >Pelayanan</a
                            >
                        </li>
                        <li>
                            <a id="buttonHeader" class="nav-link scrollto {{ Request::is('data-pasien*') ? 'active' : ''}}" href="/data-pasien"
                                >Data Pasien</a
                            >
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
                @auth
                <div class="dropdown text-end">
                  <a href="" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat datang {{ auth()->user()->nama}}
                  </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                      <li><a class="dropdown-item" href="/profil">Profil</a></li>
                      <li><form action="/logout" method="post">
                         {{csrf_field()}}
                        <button type="submit" class="btn btn-info dropdown-item">Logout</button>
                      </form></li>
                    </ul>
                </div>
                @else
                <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-user bx-sm'></i>
                  </a>
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="/login">Login</a></li>
                  </ul>
                </div>
                @endauth
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div
                id="heroCarousel"
                data-bs-interval="5000"
                class="carousel slide carousel-fade"
                data-bs-ride="carousel"
            >
                <ol
                    class="carousel-indicators"
                    id="hero-carousel-indicators"
                ></ol>

                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div
                        class="carousel-item active"
                        style="
                            background-image: url({{ asset('guest/img/slide/slide_11.jpeg')}});
                        "
                    >
                        <div class="container text-center">
                            <h2>Selamat datang di <span>Klinik Ora Et Labora</span></h2>
                            <p class="pag">
                                Klinik Ora Et Labora merupakan klinik pratama yang menangani
                                berbagai penyakit umum. Dikelolah oleh Dr. Lapan H Tarigan.<br/> 
                                Klinik ini sudah berdiri sejak Tahun 1997 selama hampir 24 tahun.
                            </p>
                            {{-- <a {{ Request::is('tentang*') ? 'active' : ''}} href="/tentang" class="btn-get-started scrollto"
                                >Lebih lanjut</a
                            > --}}
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div
                        class="carousel-item"
                        style="
                            background-image: url({{ asset('guest/img/slide/slide_22.jpeg')}});
                        "
                    >
                        <div class="container">
                            <h2>Apa itu Klinik?</h2>
                            <p class="pag">
                                Klinik adalah fasilitas pelayanankesehatan yang menyelenggarakan 
                                dan menyediakan pelayanan medis dasar dan atau spesialistik, <br/>
                                diselenggarakan oleh lebih dari satu jenis tenaga kesehatan 
                                dandipimpin oleh seorang tenaga medis (Permenkes RI No.9, 2014)
                            </p>
                        </div>
                    </div>
                </div>

                <a
                    class="carousel-control-prev"
                    href="#heroCarousel"
                    role="button"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon bi bi-chevron-left"
                        aria-hidden="true"
                    ></span>
                </a>

                <a
                    class="carousel-control-next"
                    href="#heroCarousel"
                    role="button"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon bi bi-chevron-right"
                        aria-hidden="true"
                    ></span>
                </a>
            </div>
        </section>
        <!-- End Hero -->
