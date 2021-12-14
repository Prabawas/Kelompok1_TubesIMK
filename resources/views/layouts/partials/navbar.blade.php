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
                    <i class="bi bi-clock"></i> Senin - Sabtu, 04.00 - 19.00 WIB
                </div>
                <div class="d-flex align-items-center" >
                    <i class="bi bi-phone" id="noHp">Kontak 0821-9578-9274</i> 
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <nav id="navbar" class="navbar order-last order-lg-0 me-auto">
                    <ul>
                        <li>
                            <a id="buttonHeader" class="nav-link scrollto {{ Request::is('/*') ? 'active' : ''}}" href="/">Beranda</a>
                        </li>
                        <li>
                            <a id="buttonHeader" class="nav-link scrollto {{ Request::is('profil*') ? 'active' : ''}}" href="/profil"
                                >Profil</a
                            >
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
                        <li>
                            <a id="buttonHeader" class="nav-link scrollto {{ Request::is('panduan*') ? 'active' : ''}}" href="/panduan"
                                >Panduan</a
                            >
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
                @auth
                <div class="dropdown text-end">
                  <a href="" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat datang {{ auth()->user()->posisi}} |{{ auth()->user()->nama}}
                  </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                      <li><a class="dropdown-item" href="/profil/{{ auth()->user()->id}}">Profil</a></li>
                      @can('pemilik')
                    <li><a class="dropdown-item" href="/register">Register</a></li>
                  @endcan
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
                            <h2>Klinik Ora Et Labora</h2><span>Rekap Data Pasien</span>
                            <p class="pag">
                                Klinik Ora Et Labora merupakan klinik yang menangani
                                berbagai penyakit umum. Dikelolah oleh Dr. Lapan H Tarigan.<br/> 
                                Klinik ini sudah berdiri sejak Tahun 1997 selama hampir 24 tahun.
                            </p>
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

