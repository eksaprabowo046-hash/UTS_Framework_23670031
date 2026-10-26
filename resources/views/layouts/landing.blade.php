<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing.partials.head')
</head>
<body>
    @include('landing.partials.header')

    <!-- Main Content Area -->
    <main id="main-content">
        @yield('content')
    </main>

    @include('landing.partials.footer')
    @include('landing.partials.scripts')
</body>
</html>
