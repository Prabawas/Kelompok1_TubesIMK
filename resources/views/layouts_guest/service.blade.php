@extends('layouts_guest/main')

@section('content')
            <!-- ======= Services Section ======= -->
            <section id="services" class="services services">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Pelayanan</h2>
                        <h4 style="font-style: italic;"> Registrasi Pasien </h4>
                    </div>

                  <form>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                           <div class="mb-3 ">
                              <label for="nama" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap" required="Masukkan Nama Anda">
                            </div>
                            <div class="mb-3 ">
                              <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control" id="tglLahir" name="tglLahir" required="">
                            </div>
                            <div class="mb-3 ">
                              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                              <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="tempat lahir" required="">
                            </div>
                            <div class="mb-3 ">
                              <label for="gender" class="form-label">Jenis Kelamin</label>
                               <select class="form-select" id="gender" name="gender">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                            </div>
                            <div class="mb-3 ">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="email" class="form-control" id="alamat" name="alamat" placeholder="alamat" required="">
                            </div>
                            <div class="mb-3">
                              <label for="riwayatPenyakit" class="form-label">Riwayat Penyakit</label>
                              <input type="email" class="form-control" id="riwayatPenyakit" name="riwayatPenyakit" placeholder="riwayat penyakit" required="">
                            </div>
                            <div class="mb-3">
                              <label for="gejala" class="form-label">Gejala yang dialami</label>
                              <textarea class="form-control" id="gejala" rows="3" name="gejala" required=""></textarea>
                            </div> 

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
                    

            </section>
            <!-- End Services Section -->
@endsection