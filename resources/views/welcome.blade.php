<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- styles --}}
    {{-- @vite('resources/css/app.css') --}}
    @vite('resources/css/app.css')
    @vite('node_modules/bootstrap/dist/css/bootstrap.css')
    {{-- @vite('node_modules/toastr/build/toastr.css') --}}
    {{-- bs js --}}
    @vite('node_modules/bootstrap/dist/js/bootstrap.bundle.js')
    {{-- @vite('node_modules/toastr/build/toastr.js') --}}

    {{-- icon --}}
    @vite('node_modules/bootstrap-icons/font/bootstrap-icons.css')

    {{--
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" /> --}}
</head>

<body>
    <div class="container vh-100 mx-0">
        <div class="row vh-100 vw-100">
            {{-- navbar --}}
            <div class="w-100 bg-white px-4 py-3 position-absolute start-0 z-1">
                <div class="d-flex align-items-center justify-content-between h-100 px-5">
                    <div class="d-flex align-items-center h-100">
                        <p class="m-0">Funvita Indonesia</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 h-100">
                        <p class="m-0">Beranda</p>
                        <p class="m-0">Profile</p>
                        <p class="m-0">Contact</p>
                    </div>
                </div>
            </div>

            {{-- konten --}}
            <div class="col bg-white d-flex align-items-center p-0">
                <div style="max-height: 100vh; min-height: 100vh" class="card w-100 border-0 pt-0">
                    <div class="mt-5" data-bs-spy="scroll" data-bs-smooth-scroll="true" style="overflow-y: scroll">
                        @yield('container')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>