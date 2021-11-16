@extends('layouts_guest/main')

@section('content')
         
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">
                    <div class="row no-gutters">
                        <div
                            class="
                                col-lg-4 col-md-5
                                d-md-flex
                                align-items-md-stretch
                            "
                        >
                            <div class="count-box">
                                <i class="fas fa-user-md"></i>
                                <span
                                    data-purecounter-start="0"
                                    data-purecounter-end="3"
                                    data-purecounter-duration="1"
                                    class="purecounter"
                                ></span>

                                <p>
                                    <strong>Petugas Kesehatan.</strong> 
                                    <br/>Terdapat 3 petugas
                                    kesehatan
                                </p>
                            </div>
                        </div>

                        <div
                            class="
                                col-lg-4 col-md-5
                                d-md-flex
                                align-items-md-stretch
                            "
                        >
                            <div class="count-box">
                                <i class="far fa-hospital"></i>
                                <span
                                    data-purecounter-start="0"
                                    data-purecounter-end="26"
                                    data-purecounter-duration="1"
                                    class="purecounter"
                                ></span>
                                <p>
                                    <strong>Melayani</strong> 
                                    <br/> melayani segala macam penyakit
                                </p>
                            </div>
                        </div>

                        <div
                            class="
                                col-lg-4 col-md-5
                                d-md-flex
                                align-items-md-stretch
                            "
                        >
                            <div class="count-box">
                                <i class="fas fa-award"></i>
                                <span
                                    data-purecounter-start="0"
                                    data-purecounter-end="150"
                                    data-purecounter-duration="1"
                                    class="purecounter"
                                ></span>
                                <p>
                                    <strong>Pasien</strong>
                                    <br/>Sudah melayanai lebih dari
                                    150 pasien
                                </p>
                            </div>

                                {{-- <div class="count-box">
                                    <i class="far fa-hospital"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="26"
                                        data-purecounter-duration="1"
                                        class="purecounter"
                                    ></span>
                                    <p>
                                        <strong>Melayani</strong> 
                                        <br/> AAAAAAAAAAAAA
                                    </p>
                                </div>
                            </div>

                                <div class="count-box">
                                    <i class="far fa-hospital"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="26"
                                        data-purecounter-duration="1"
                                        class="purecounter"
                                    ></span>
                                    <p>
                                        <strong>Melayani</strong> 
                                        <br/> BBBBBBBBBBBBBBBBB
                                    </p>
                                </div>
                            </div>

                                <div class="count-box">
                                    <i class="far fa-hospital"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="26"
                                        data-purecounter-duration="1"
                                        class="purecounter"
                                    ></span>
                                    <p>
                                        <strong>Melayani</strong> 
                                        <br/> CCCCCCCCCCCCCCCCCCCCCCC
                                    </p>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </section>
            <!-- End Counts Section -->

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

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Testimonials</h2>
                        <p>
                            Beberapa orang yang sudah pernah menggunakan
                            layanan Klinik Ora Et Labora.
                        </p>
                    </div>

                    <div
                        class="testimonials-slider swiper"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i
                                            class="
                                                bx
                                                bxs-quote-alt-left
                                                quote-icon-left
                                            "
                                        ></i>
                                        Klinik Ora Et Labora membantu saya dalam menangani masalah
                                        yang dialami anak saya. Petugas kesehatan yang ramah dan sopan
                                        membuat saya merasa nyaman dan aman.
                                        <i
                                            class="
                                                bx
                                                bxs-quote-alt-right
                                                quote-icon-right
                                            "
                                        ></i>
                                    </p>
                                    <img
                                        src="{{ asset('guest/img/testimonials/testimonials-2.jpg')}}"
                                        class="testimonial-img"
                                        alt=""
                                    />
                                    <h3>Mahyuni Saragih</h3>
                                    <h4>Ibu Rumah Tangga</h4>
                                </div>
                            </div>
                            <!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i
                                            class="
                                                bx
                                                bxs-quote-alt-left
                                                quote-icon-left
                                            "
                                        ></i>
                                        Klinik Ora Et Labora adalah klinik yang berada di dekat
                                        rumah saya. Jadi ketika saya mengalami gejala penyakit,
                                        saya dapat langsung ke klinik tersebut.
                                        <i
                                            class="
                                                bx
                                                bxs-quote-alt-right
                                                quote-icon-right
                                            "
                                        ></i>
                                    </p>
                                    <img
                                        src="{{ asset('guest/img/testimonials/testimonials-1.jpg')}}"
                                        class="testimonial-img"
                                        alt=""
                                    />
                                    <h3>Sudarmanto Siregar</h3>
                                    <h4>Karyawan Swasta</h4>
                                </div>
                            </div>
                            <!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i
                                            class="
                                                bx
                                                bxs-quote-alt-left
                                                quote-icon-left
                                            "
                                        ></i>
                                        Klinik Ora Et Labora, klinik yang cepat dalam mendiagnosis
                                        penyakit yang diderita pasien dan hasil yang diberikan secara
                                        akurat jadi dapat dipercaya.
                                        <i
                                            class="
                                                bx
                                                bxs-quote-alt-right
                                                quote-icon-right
                                            "
                                        ></i>
                                    </p>
                                    <img
                                        src="{{ asset('guest/img/testimonials/testimonials-3.jpg')}}"
                                        class="testimonial-img"
                                        alt=""
                                    />
                                    <h3>Dosma Rosalina</h3>
                                    <h4>Pegawai Bank</h4>
                                </div>
                            </div>
                            <!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <!-- End Testimonials Section -->

        </main>
        <!-- End #main -->
@endsection