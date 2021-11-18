@extends('layouts/main')

@section('content')
<div class="container mt-5">

    @if(session()->has('edit')) <!-- pesan dari DashboardPostController php line 59 -->
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

	<div class="table-responsive ">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Aksi</th>
            </tr>
            @foreach($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->nama}}</td>
              <td>{{ $user->telepon}}</td>
              <td>{{ $user->alamat}}</td>
              <td>
                @if($user->id !== 0)
                <a href="profil/{{$user->id}}" class="badge bg-info"><span data-feather="eye"></span>Lihat</a>
                <a href="/profil/edit/{{ $user->id }}" class="badge bg-warning"><span data-feather="eye"></span>Edit</a>
                @endif
               <form action="/profil/delete/{{ $user->id }}" method="post" class="d-inline">
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('yakin hapus data {{$user->nama}}?')"><span data-feather="x-circle"></span>Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
    </div>
@endsection