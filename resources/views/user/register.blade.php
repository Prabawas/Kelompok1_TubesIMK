@extends('layouts/main')

@section('content')

	<div class="container my-3">
		<main class="form-registration">
		<h1 class="h3 mb-3 text-center" style="font-style: oblique;">Registrasi Petugas</h1>
		  <form action="/register" method="post" enctype="multipart/form-data">
		  	@csrf <!-- untuk mengenerate token agar user bisa masuk -->
		  	<div class="form-floating">
		      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" required="" value="{{ old('nama') }}">
		      <label for="nama">Nama lengkap</label>
			      @error('nama') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>

		    <div class="form-floating">
		      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required="" value="{{ old('email') }}">
		      <label for="email">Email</label>
		        @error('email')
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>

		    <div class="form-floating">
		      <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="tgl_lahir" required="" value="{{ old('tgl_lahir') }}">
		      <label for="tgl_lahir">Tanggal Lahir</label>
			      @error('tgl_lahir') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>

		    <div class="form-floating">
            <label for="jenisKelamin" class="form-label"></label>
            <select class="form-select" name="jenisKelamin" >
              <option value="hidden" selected>Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

		    <div class="form-floating">
		      <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required="" value="{{ old('alamat') }}">
		      <label for="alamat">Alamat</label>
			      @error('alamat') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>

		    <div class="form-floating">
		      <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror" id="telepon" placeholder="telepon" required="" value="{{ old('telepon') }}">
		      <label for="telepon">No. Telepon</label>
			      @error('telepon') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>

		    <div class="form-floating">
            <label for="posisi" class="form-label"></label>
            <select class="form-select" name="posisi" >
              <option value="hidden" selected>Posisi</option>
                <option value="Pemilik Klinik">Pemilik Klinik</option>
                <option value="Petugas Klinik">Petugas Klinik</option>
            </select>
        </div>

		     
		     <div class="mb-3 mt-2">
            <label for="avatar" class="form-label">Foto Profil</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('avatar') is-invalid @enderror " type="file" id="avatar" name="avatar" onchange="previewImage()">
             @error('avatar') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

		    <div class="form-floating">
		      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required="">
		      <label for="password">password</label>
		        @error('password')
				      <div class="invalid-feedback">
				      	{{ $message }}
				      </div>
			      @enderror
		    </div>

		    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
		  </form>
		</main>
	</div>

	 <script>
	 	
      function previewImage() {
        const image = document.querySelector('#avatar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>

@endsection