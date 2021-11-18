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
@endsection