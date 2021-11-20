@extends('layouts/main')

@section('content')
	<section class="">
  <div class="container py-5 ">

    <div class="row  ms-auto">
      <div class="col md-4 mb-3 "></div>
       <div class="col md-4 mb-3 "></div>
       <div class="col md-4 mb-3 ">
          <a class="btn btn-danger" href="/exportPdf/{{$pasien->id}}"> Export ke PDF</a>
      </div>
    </div>
  	 
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3">
          <div class="row g-0 justify-content-center">
            <div class="col-md-9">
              <div class="card-body p-4">
                <h6>Riwayat Pasien</h6> 
                <small>Petugas {{$pasien->user->nama}}</small> <br/>
                <small>Tanggal {{$pasien->created_at}}</small>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-4 mb-3">
                    <h6>Nama Lengkap</h6>
                    <p class="text-muted">{{$pasien->nama}}</p>
                  </div>
                 <div class="col-4 mb-3">
                    <h6>Tanggal Lahir</h6>
                    <p class="text-muted">{{$pasien->tgl_lahir}}</p>
                  </div>
                   <div class="col-4 mb-3">
                    <h6>Umur</h6>
                    <p class="text-muted">{{$pasien->umur}}</p>
                  </div>
                </div>
               <div class="row pt-1">
                  <div class="col-4 mb-3">
                    <h6>Jenis Kelamin</h6>
                    <p class="text-muted">{{$pasien->jenisKelamin}}</p>
                  </div>
                 <div class="col-4 mb-3">
                    <h6>Telepon</h6>
                    <p class="text-muted">{{$pasien->telepon}}</p>
                  </div>
                   <div class="col-4 mb-3">
                    <h6>Alamat</h6>
                    <p class="text-muted">{{$pasien->alamat}}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-12 mb-3">
                    <h6>Riwayat peyakit</h6>
                    <p class="text-muted">{{ $pasien->riwayat }}</p>
                  </div>
                </div>
                 <div class="row pt-1">
                  <div class="col-12 mb-3">
                    <h6>Gejala yang dialami</h6>
                    <p class="text-muted">{{ $pasien->gejala }}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-8 mb-3">
                  </div>
                  <div class="col-4 mb-3">
                  	<p class="text-dark fs-6"><a href="/data-pasien">Ke halaman sebelumnya</a></p>
                    <p><a href="/data-pasien/edit/{{ $pasien->id }}" class="badge bg-warning text-decoration-none fs-6">Edit data pasien</a></p>
                    <p><form action="/profil/delete/{{ $pasien->id }}" method="post" class="d-inline">
                          @csrf
                          <button class="badge bg-danger border-0 fs-6" onclick="return confirm('yakin hapus data {{$pasien->nama}}?')"><span data-feather="x-circle"></span>Hapus data pasien</button>
                        </form>
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection