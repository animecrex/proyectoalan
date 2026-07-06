<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Curso+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body id="kt_app_body" class="app-default">

    <div class="d-flex flex-column flex-root app-root">
        <div class="app-page flex-column flex-column-fluid">

            {{-- HEADER --}}
            @include('partials.header')

            {{-- WRAPPER (CLAVE) --}}
            <div class="app-wrapper d-flex">

                {{-- SIDEBAR --}}
                @include('partials.sidebar')

                {{-- MAIN --}}
                <div class="app-main flex-column flex-row-fluid">

                    {{-- CONTENT --}}
                    <div class="app-content flex-column-fluid p-5">
                        @yield('content')
                    </div>

                </div>

            </div>

            {{-- FOOTER --}}


        </div>
        @include('partials.footer')
    </div>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    @yield('javascript')

</body>

</html>
