<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Password</title>
</head>
<body>
    

    <form method="POST" action="{{ url('/forgot_password') }}">
        
        {{ csrf_field() }}

        @if (session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif


        <input type="email" name="email" id="email" placeholder="example@gmail.com">
        <button type="submit">Submit</button>

    </form>


</body>
</html>