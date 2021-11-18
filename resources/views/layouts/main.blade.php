<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Klinik Ora Et Labora | {{ $title }}</title>

        <!-- Favicons -->
        <link href="{{ asset('guest/img/clinic-regular-24.png')}}" rel="icon" />
        <link
            href="{{ asset('guest/img/apple-touch-icon.png')}}"
            rel="apple-touch-icon"
        />

        @include('layouts/partials/head')
       
    </head>

    <body>
       @include('layouts/partials/navbar')

       @yield('content')

      @include('layouts/partials/footer')
    </body>
</html>
