@extends('layouts_guest/main')

@section('content')
         <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Klinik Ora Et Labora</h2>
                        <p>
                            Klinik Ora Et Labora merupakan klinik pratama yang menangani 
                            berbagai penyakit umum. Dikelolah oleh Dr. Lapan H Tarigan.<br/> 
                            Klinik ini sudah berdiri sejak Tahun 1997 selama hampir 24 tahun.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <img
                                src="{{ asset('guest/img/about.jpg')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                        <div
                            class="col-lg-6 pt-4 pt-lg-0 content"
                            data-aos="fade-left"
                        >
                            <h5>
                                Klinik Pratama yang menyediakan layanan berobat dan
                                menangani penyakit baik ringan maupun umum.
                            </h5>
                            <ul>
                                <li>
                                    <i class="bi bi-person"></i> Dr. Lapan H Tarigan
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt"></i> Sejak tahun 1997
                                </li>
                                <li>
                                    <i class="bi bi-house"></i> Jl. Mariam Ginting, Gung Leto,<br/>
                                    Kabanjahe, Kabupaten Karo, Sumatera Utara 22111
                                </li>
                            </ul>
                            <p>
                                Sebelum menjadi klinik seperti sekarang ini awalnya hanya sebuah praktek dokter umum Dr.Lapan H Tarigan hingga pada tahun 2018 dilakukan renovasi bangunan yang kemudian berubah menjadi klinik seperti sekarang ini. Jadi bisa dibilang Klinik ini telah beroperasi dari yang awal mulanya praktek sampai menjadi klinik sudah hampir 24 tahun.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Us Section -->

@endsection