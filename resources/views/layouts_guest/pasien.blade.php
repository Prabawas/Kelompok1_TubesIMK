@extends('layouts_guest/main')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Pertemuan 3</title>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center">Mahasiswa</h1>
        <button class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#tambahMahasiswaModal">Tambah Mahasiswa</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="list-mahasiswa"></tbody>
        </table>
    </div>

    <!-- Edit Mahasiswa Modal -->
    <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="edit-mahasiswa" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahModalLabel">Edit Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="editId" id="editId">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="editNama" id="editNama" placeholder="Nama">
                        <label for="editNama">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="editNIM" id="editNIM" placeholder="NIM">
                        <label for="editNIM">NIM</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tambah Mahasiswa Modal -->
    <div class="modal fade" id="tambahMahasiswaModal" tabindex="-1" aria-labelledby="tambahMahasiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" id="tambah-mahasiswa">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahMahasiswaModalLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="tambahNama" id="tambahNama" placeholder="Nama">
                        <label for="tambahNama">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="tambahNIM" id="tambahNIM" placeholder="NIM">
                        <label for="tambahNIM">NIM</label>
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
    <script src="script.js"></script>

</body>

</html>
@endsection