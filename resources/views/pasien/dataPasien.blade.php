@extends('layouts/main')

@section('content')
  
  <div class="container mt-5">
    <div class="row  justify-content-center">
       <div class="table-responsive col-md-10 lg-8">
         @if(session()->has('success')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

      @if(session()->has('edit')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

     @if(session()->has('delete')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

<<<<<<< HEAD
    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Data Pasien</title>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center">Data Pasien</h1>
        <table class="table table-bordered">
            <thead class="table-pasien">
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Riwayat Pasien</th>
                    <th>Gelaja yang di alami</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="list-pasien"></tbody>
        </table>
    </div>

    <!-- Edit Pasien Modal -->
    <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-pasien" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahModalLabel">Edit Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="editId" id="editId">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="editNama" id="editNama" placeholder="Logi Sanjaya">
                        <label for="editNama">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="edit-tgll" id="edit-tgll" placeholder="">
                        <label for="edit-tgll">Tanggal Lahir</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="edit-tempatl" id="edit-tempatl" placeholder="Kabanjahe">
                        <label for="edit-tempatl">Tempat Lahir</label>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="edit-gender" class="form-control">Jenis Kelamin</label>
                               <select class="form-select" id="gender" name="gender">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="editAlamat" id="editAlamat" placeholder="Jl.Mariam Ginting">
                        <label for="editAlamat">Alamat</label>
                    </div> 
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="editRiwayat" id="editRiwayat" placeholder="Riwayat Penyakit">
                        <label for="editRiwayat">Riwayat Penyakit</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="editGejala" id="editGejala" placeholder="Gejala pasien">
                        <label for="editGejala">Gejala</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Script buat sendiri  --}}
    <script src="{{ asset('guest/vendor/byMe/pasien.js')}}"></script>

</body>

</html>
@endsection
=======
      <div class="row justify-content-end mt-3 mb-5">
        <div class="col-md-6">
          <form class="d-flex" action="/data-pasien" method="get">
          <input class="form-control me-2" type="text" placeholder="Cari .." name="cari" value="{{ request('cari') }}">
          <button class="btn btn-info" type="submit">Cari</button>
        </form>
        </div>
      </div>

        <table class="table table-striped table-sm ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Umur</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($pasiens as $pasien)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pasien->nama}}</td>
              <td>{{ $pasien->umur}}</td>
              <td>{{ $pasien->jenisKelamin}}</td>
               <td>
                <a href="/data-pasien/{{ $pasien->id }}" class="badge bg-info"><i class='bx  bxs-like bxs-show bx-sm'></i></a>
                <a href="/data-pasien/edit/{{ $pasien->id }}" class="badge bg-warning"><i class='bx bxs-edit bx-sm'></i></a>
                <form action="/data-pasien/delete/{{ $pasien->id }}" method="post" class="d-inline">
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus data pasien {{$pasien->nama}}?')"><i class='bx bxs-trash bx-sm'></i></button>
                </form>
              </td>
              
            @endforeach
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
    </div>
    <div class="d-flex justify-content-end">
    {{ $pasiens->links() }} <!-- untuk pagination -->
  </div>
  </div>

 
@endsection
>>>>>>> 9dbcf9340e5c142f496e0ccf2da30885b4b75fe7
