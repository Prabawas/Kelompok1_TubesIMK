
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

        {{-- menampilkan data pasien yang ada didalam DATABASE --}}
        <section id="counts" class="counts">
          <div class="container" data-aos="fade-up">
              <div class="row no-gutters justify-content-center">
                  <div class=" col-lg-4 col-md-5 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                          <i class="fas fa-user-md"></i>
                          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                          <p> <strong>Pelaku Kesehatan.</strong><br/>
                            Terdapat 3 petugas
                            kesehatan dan 1 pemilik klinik
                          </p>
                      </div>
                  </div>

                  <div class=" col-lg-4 col-md-5 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                          <i class="fas fa-award"></i>
                          {{-- mengambil data total pasien --}}
                          <span
                          >{{$pasiens->count()}}</span>
                          <p>
                              <strong>Total Pasien/halaman</strong>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Counts Section -->

      <div class="row justify-content-end mt-3 mb-5">
        <div class="col-md-6">
          <form class="d-flex" action="/data-pasien" method="get">
          <input class="form-control me-2" type="text" placeholder="Cari .." name="cari" value="{{ request('cari') }}">
          <button class="btn btn-info" type="submit">Cari</button>
        </form>
        <div class="col-lg-4 mt-3 ms-auto ">
          <a href="/pelayanan" ><button class="btn btn-primary">Tambah pasien</button></a>
        </div>
        </div>
      </div>

        <table  class="table table-striped table-sm ">
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
                <a href="/data-pasien/{{ $pasien->id }}" class="badge bg-info" target="_blank"><i class='bx  bxs-like bxs-show bx-sm'></i></a>
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

