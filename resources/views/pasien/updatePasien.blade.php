@extends('layouts/main')

@section('content')

<section class="">
  <div class="container py-3 ">
    <form method="POST" action="/data-pasien/update/{{ $pasien->id }}" enctype="multipart/form-data">
    	{{ csrf_field() }}
    <div class="row d-flex justify-content-center align-items-center ">
    <h3 class="text-center"> Update data Pasien </h3>
     <small class="text-center mb-1">Petugas {{$pasien->user->nama}}</small>
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3">
          <div class="row g-0 justify-content-center">
            <div class="col-md-9">
              <div class="card-body p-4">
              	<div class="row pt-1">
                  <div class=" col-4 mb-3">
		            <label for="nama" class="form-label">Nama Lengkap</label>
		            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus="" required="" value="{{ old('nama', $pasien->nama) }}">
		             @error('nama') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>
				  <div class=" col-4 mb-3">
		            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
		            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" autofocus="" required="" value="{{ old('tgl_lahir', $pasien->tgl_lahir) }}">
		             @error('tgl_lahir') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>
		          <div class=" col-4 mb-3">
		            <label for="umur" class="form-label">Umur</label>
		            <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" autofocus="" required="" value="{{ old('umur', $pasien->umur) }}">
		             @error('umur') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>
		      </div>
		      <div class="row pt-1">

						<div class=" col-4 mb-3">
							<label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
							<input type="jenisKelamin" class="form-control @error('jenisKelamin') is-invalid @enderror" id="jenisKelamin" name="jenisKelamin" autofocus="" readonly required="" value="{{ old('jenisKelamin', $pasien->jenisKelamin) }}">
							 @error('jenisKelamin') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
							  <div class="invalid-feedback">
								{{ $message }}
							  </div>
							@enderror
						  </div>

		           <div class=" col-4 mb-3">
		            <label for="telepon" class="form-label">Telepon</label>
		            <input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" autofocus="" required="" value="{{ old('telepon', $pasien->telepon) }}">
		             @error('telepon') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>

		          <div class=" col-4 mb-3">
		            <label for="alamat" class="form-label">Alamat</label>
		            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" autofocus="" required="" value="{{ old('alamat', $pasien->alamat) }}">
		             @error('alamat') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>
		      </div>

		      <div class="row pt-1">
		          <div class=" col-12 mb-3">
		            <label for="riwayat" class="form-label">Riwayat Penyakit</label>
		            <input type="text" class="form-control @error('riwayat') is-invalid @enderror size" id="riwayat" name="riwayat" autofocus="" required="" value="{{ old('riwayat', $pasien->riwayat) }}">
		             @error('riwayat') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>
		      </div>
		      
		      <div class="row pt-1 mb-3">
		          <div class=" col-12 mb-3 mt-4">
		            <label for="gejala" class="form-label">Gejala yang dialami</label>
		            <input type="text" class="form-control @error('gejala') is-invalid @enderror resizedbox " id="gejala" name="gejala" autofocus="" required="" value="{{ old('gejala', $pasien->gejala) }}">
		             @error('gejala') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
		              <div class="invalid-feedback">
		                {{ $message }}
		              </div>
		            @enderror
		          </div>
                </div>
                  <div class="row pt-1 mt-3">
                  	<div class="col-4 mb-3 mt-5">
                  		<p class="text-dark fs-6"><a href="/data-pasien">Ke halaman sebelumnya</a></p>
                  	</div>
                  	<div class="col-4 mb-3 mt-5"></div>
                  <div class="col-4 mb-3 mt-5">
                     <button type="submit" class="btn btn-primary">Simpan data pasien</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </form>
</div>
</section>

@endsection