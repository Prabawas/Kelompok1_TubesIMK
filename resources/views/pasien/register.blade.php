@extends('layouts/main')

@section('content')
            <!-- ======= Services Section ======= -->
            <section id="services" class="services services">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Pelayanan</h2>
                        <h4 style="font-style: italic;"> Registrasi Data Pasien </h4>
                    </div>

                  <form action="/pelayanan" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                           <div class="mb-3 ">
                              <label for="nama" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="nama lengkap" required="" value="{{ old('nama') }}" >
                              @error('nama') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>

                            <div class="mb-3 ">
                              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required="" value="{{ old('tgl_lahir') }}">
                              @error('tgl_lahir') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>

                             <div class="mb-3 ">
                              <label for="umur" class="form-label">Umur</label>
                              <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" placeholder="umur pasien" required="" value="{{ old('umur') }}">
                              @error('umur') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>

                            <div class="mb-3 ">
                              <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                               <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                            </div>

                            <div class="mb-3 ">
                              <label for="telepon" class="form-label">Telepon</label>
                              <input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" placeholder=" nomor hp/telepon" required="" value="{{ old('telepon') }}">
                              @error('telepon') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>

                            <div class="mb-3 ">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="alamat" required="" value="{{ old('alamat') }}">
                               @error('alamat') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>

                            <div class="mb-3">
                              <label for="riwayat" class="form-label">Riwayat Penyakit</label>
                              <input type="text" class="form-control @error('riwayat') is-invalid @enderror" id="riwayat" name="riwayat" placeholder="riwayat penyakit" required="" value="{{ old('riwayat') }}">
                               @error('riwayat') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>

                            <div class="mb-3">
                              <label for="gejala" class="form-label">Gejala yang dialami</label>
                              <textarea class="form-control @error('gejala') is-invalid @enderror" id="gejala" rows="3" name="gejala" placeholder="gejala yang dialami pasien" required="" value="{{ old('gejala') }}"></textarea>
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