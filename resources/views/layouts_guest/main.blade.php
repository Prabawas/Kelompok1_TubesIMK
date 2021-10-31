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

        @include('layouts_guest/partials_guest/head')
       
    </head>

    <body>
       @include('layouts_guest/partials_guest/navbar')

       @yield('content')

      @include('layouts_guest/partials_guest/footer')
    </body>
</html>
