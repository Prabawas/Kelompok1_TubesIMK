<h1>Hello {{ $user->name }} </h1>

<p>
    Tolong klik tombol reset password untuk reset password anda
    <a href="{{ url('reset_password/'.$user->email.'/'.$code) }}">Reset Password</a>
</p>