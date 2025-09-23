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
    <div class="container-fluid px-0">
        {{-- Navbar --}}
        @include('partials.navbar')
        
        <div class="row g-0">
            {{-- Sidebar --}}
            <div class="col-2">
                @include('partials.sidebar')
            </div>

            {{-- Content --}}
            <div class="col-10 p-3">
                @yield('content')
            </div>

        </div>
    </div>
    @include('partials.scripts')
    @yield('scripts')
</body>
</html>
