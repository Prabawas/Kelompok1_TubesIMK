@extends('layouts_guest/main')

@section('content')
<div class="container mt-5">

    @if(session()->has('edit')) <!-- pesan dari DashboardPostController php line 59 -->
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('edit') }}
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
              @if($user->id === Auth()->user()->id)
              <td>
                <a href="profil/{{$user->id}}" class="badge bg-info"><span data-feather="eye"></span>Lihat</a>
              </td>
              @endif
            </tr>
            @endforeach
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
    </div>
@endsection