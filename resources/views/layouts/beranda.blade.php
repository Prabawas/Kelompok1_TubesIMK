@extends('layouts/main')

@section('content')


            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div
                            class="col-lg-6 order-2 order-lg-1"
                            data-aos="fade-right"
                        >
                            <div class="icon-box mt-5 mt-lg-0">
                                <i class="bx bx-calendar"></i>
                                <h4>Jadwal</h4>
                                <p>
                                    Klinik Ora Et labora memiliki jadwal
                                    sehingga memudahkan pasien bila hendak
                                    berobat.
                                </p>
                            </div>
                            <div class="icon-box mt-5">
                                <i class="bx bx-clipboard"></i>
                                <h4>Akurat</h4>
                                <p>
                                    Hasil diagnosis yang diberikan akurat sehingga
                                    dapat membantu pasien.
                                </p>
                            </div>
                            <div class="icon-box mt-5">
                                <i class="bx bx-plus-medical"></i>
                                <span data-feather="grid"></span>
                                <h4>Terpercaya</h4>
                                <p>
                                    Klinik yang sudah berdiri sejak 1997
                                    yang sudah memiliki pengalaman sekitar 24 tahun
                                </p>
                            </div>
                            <div class="icon-box mt-5">
                                <i class="bx bx-shield"></i>
                                <h4>Aman</h4>
                                <p>
                                    Petugas kesehatan yang sudah berpengalaman
                                    dalam menangani berbagai penyakit
                                </p>
                            </div>
                        </div>
                        <div
                            class="image col-lg-6 order-1 order-lg-2"
                            style="
                                background-image: url('{{ asset('guest/img/featuress.jpeg')}}');
                            "
                            data-aos="zoom-in"
                        ></div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

        </main>
        <!-- End #main -->
@endsection