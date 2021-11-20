@extends('layouts/main')

@section('content')
<div class="container mt-5">

    @if(session()->has('edit')) 
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

    @if(session()->has('success')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

     @if(session()->has('hapus')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('hapus') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif


     <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($users as $user)
        <div class="col">
          <div class="card h-100">
            <img src="/image/{{ $user->avatar }}" class="card-img-top" style="max-height: 250px; overflow: hidden;" alt="{{ $user->nama }}">
            <div class="card-body">
              <h5 class="card-title">{{ $user->nama }}</h5>
              <p class="card-title">{{ $user->posisi }}</p>
            </div>
            <div class="card-footer">
                <a href="profil/{{$user->id}}" class="badge bg-info fs-6"><span data-feather="eye"></span>Lihat</a>
                @can('pemilik')
                <a href="/profil/edit/{{ $user->id }}" class="badge bg-warning fs-6"><span data-feather="eye"></span>Edit</a>
                @endcan
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
   
@endsection