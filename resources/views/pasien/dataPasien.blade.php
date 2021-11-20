@extends('layouts/main')

@section('content')
	
	 @if(session()->has('success')) <!-- pesan dari DashboardPostController php line 59 -->
     <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>


      

      
     </div>
    @endif

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