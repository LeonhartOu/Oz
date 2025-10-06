<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    @include('partials.styles')
</head>

<body>
    {{-- <div class="container-fluid px-0">
        @include('partials.navbar')
        
        <div class="row g-0">
            <div class="col-2">
                @include('partials.sidebar')
            </div>

            <div class="col-10 p-3">
                @yield('content')
            </div>

        </div>
    </div> --}}

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>

        {{-- Navbar --}}
        <div class="pcoded-container navbar-wrapper">
            @include('partials.navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    {{-- Sidebar --}}
                    @include('partials.sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @yield('content')
                                </div>
                                <div class="md-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.scripts')
    @yield('scripts')  {{-- Custom scripts for each page --}}
</body>

</html>
