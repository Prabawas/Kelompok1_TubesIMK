@extends('layouts_guest/main')

@section('content')
	
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">
        <h1 class="h2">Edit Profil</h1>
      </div>

    <div class="align-items-center">
       <form method="post" action="/profil/update/{{ $users->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="mb-3">
            <label for="nama" class="form-label">Nama lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus="" required="" value="{{ old('nama', $users->nama) }}">
             @error('nama') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-label">No. Hp</label>
            <input type="number" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" autofocus="" required=""  value="{{ old('telepon', $users->telepon) }}">
             @error('telepon') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">alamat lengkap</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" autofocus="" required="" value="{{ old('alamat', $users->alamat) }}">
             @error('alamat') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

         <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus="" required="" value="{{ old('email', $users->email) }}">
             @error('email') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" autofocus="" required="" value="{{ old('tgl_lahir', $users->tgl_lahir) }}">
             @error('tgl_lahir') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="avatar" class="form-label">Foto Profil</label>
            <input type="hidden" name="avatarLama" value="{{ $users->avatar }}">
            @if($users->avatar)
              <img src="{{ $users->avatar }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('avatar') is-invalid @enderror " type="file" id="avatar" name="avatar" onchange="previewImage()">
             @error('avatar') <!-- kalau users salah memasukkan data akan muncul pesan eror -->
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Simpan profil</button>
        </form>
    </div>
    </div>
  </div>
  
    <script>

      function previewImage() {
        const image = document.querySelector('#foto_akun');
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