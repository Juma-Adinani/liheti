<!DOCTYPE html>
<html lang="en">

@include('partials._head_tag')

<body>
    <!-- Spinner Start -->
    @if (Route::currentRouteName() != 'notfound')
        @include('partials._spinner')
        <!-- Spinner End -->

        <!-- Topbar Start -->
        @include('partials._topbar')
        <!-- Topbar End -->

        <!-- Navbar Start -->
        @include('partials._navbar')
        <!-- Navbar End -->

        @if (Route::currentRouteName() != 'home')
            <!-- Page Header Start -->
            @include('partials._breadcrumb')
            <!-- Page Header End -->

            <!-- Fact Start -->
            @include('partials._facts')
        @endif

        <!-- Fact End -->
    @endif

    @yield('content')

    @if (Route::currentRouteName() != 'notfound')
        <!-- Footer Start -->
        @include('partials._footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        @include('partials._back_to_top')
    @endif

    <!-- JavaScript Libraries -->
    @include('partials._script_tag')
</body>

</html>
