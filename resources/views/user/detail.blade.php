@extends('layouts/main')

@section('content')
	<section class="vh-100">
  <div class="container py-5 ">
  	 <div class="container">
      @if(session()->has('edit')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-edit alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-12 mb-4 mb-lg-0">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-dark mt-3">
              <img
                src=" /image/{{ $user->avatar }}"
                alt="..."
                class="img-fluid my-2"
                style="width: 120;"/>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nama Lengkap</h6>
                    <p class="text-muted">{{$user->nama}}</p>
                  </div>
                 <div class="col-6 mb-3">
                    <h6>Tanggal Lahir</h6>
                    <p class="text-muted">{{$user->tgl_lahir}}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Jenis Kelamin</h6>
                    <p class="text-muted">{{$user->jenisKelamin}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>No. Hp</h6>
                    <p class="text-muted">{{$user->telepon}}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Alamat</h6>
                    <p class="text-muted">{{$user->alamat}}</p>
                  </div>
                   <div class="col-6 mb-3">
                    <h6>Posisi</h6>
                    <p class="text-muted">{{$user->posisi}}</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{$user->email}}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <div class="col-6 mb-3">
                    <p><a href="/profil">Sebelumnya</a></p>
                  </div>
                  </div>
                  @can('pemilik')
                  <div class="col-6 mb-3">
                    <p><a href="/profil/edit/{{ $user->id }}" class="badge bg-warning text-decoration-none fs-6">Edit Profil</a></p>
                  </div>
                  @endcan
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