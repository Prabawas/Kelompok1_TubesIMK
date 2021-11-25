@extends('layouts/main')

@section('content')
	@if(session()->has('login')) <!-- pesan dari logincontroller php line 53 -->
			<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
				{{ session('login') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
			</div>
		@endif
	
	
		<main class="form-signin">
			<h1 class="h3 mb-3 text-center" style="font-family: monospace;">Login</h1>
			  <form action="/login" method="post">
			  	{{ csrf_field() }}<!-- untuk mengenerate token agar user bisa masuk -->
				  {{-- <br><br> --}}
			  	<div class="formLogin">
					<div class="form-floating">
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required="" value="{{ old('email') }}">
					<label for="email">Email</label>
						@error('email') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="form-floating">
					<input type="password" name="password" class="form-control" id="password" placeholder="password" required="">
					<label for="password">Password</label>
					</div>
					<div class="eye-lock">
						<div class="fa fa-lock"></div>
					</div>
				</div>
			    <button class="w-100 btn btn-lg btn-primary" type="submit" style="font-family: monospace;">Login</button>
			   </form>
		</main>
	</div>
@endsection