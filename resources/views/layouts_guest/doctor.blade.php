@extends('layouts_guest/main')

@section('content')
         <!-- ======= Doctors Section ======= -->
            <section id="doctors" class="doctors section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Dokter</h2>
                        <p>
                            Di Klinik Ora Et Labora terdapat 3 dokter yang
                            melayani para pasien.
                        </p>
                    </div>

                    <div class="row">
                        <div
                            class="col-lg-4 col-md-5 d-flex align-items-stretch"
                        >
                            <div
                                class="member"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <div class="member-img">
                                    <img
                                        src="{{ asset('guest/img/doctors/doctors-111.jpeg')}}"
                                        class="img-fluid"
                                        alt=""
                                    />
                                </div>
                                <div class="member-info">
                                    <h4>Ernawati br Tarigan</h4>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-5 d-flex align-items-stretch"
                        >
                            <div
                                class="member"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <div class="member-img">
                                    <img
                                        src="{{ asset('guest/img/doctors/doctors-2.jpg')}}"
                                        class="img-fluid"
                                        alt=""
                                    />
                                </div>
                                <div class="member-info">
                                    <h4>Taruli br Sihombing</h4>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-5 d-flex align-items-stretch"
                        >
                            <div
                                class="member"
                                data-aos="fade-up"
                                data-aos-delay="300"
                            >
                                <div class="member-img">
                                    <img
                                        src="{{ asset('guest/img/doctors/doctors-3.jpg')}}"
                                        class="img-fluid"
                                        alt=""
                                    />
                                </div>
                                <div class="member-info">
                                    <h4>Rasmita br Tarigan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Doctors Section -->

@endsection