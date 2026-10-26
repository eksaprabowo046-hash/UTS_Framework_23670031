<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body class="@yield('body-class', '')">
    <!-- BEGIN #app -->
    <div id="app" class="app @yield('app-class', '')">
        @hasSection('no-header-sidebar')
            @yield('content')
        @else
            @include('admin.partials.header')
            @include('admin.partials.sidebar')

            <!-- BEGIN #content -->
            <div id="content" class="app-content @yield('content-class', '')">
                @yield('content')
            </div>
            <!-- END #content -->
        @endif

        @include('admin.partials.footer')
    </div>
    <!-- END #app -->

    @include('admin.partials.scripts')
</body>
</html>
