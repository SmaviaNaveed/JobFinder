<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.header')
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Spinner -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar -->
        @include('admin.layouts.sidenav')


        <!-- Content -->
        <div class="content">

            <!-- Navbar -->
            @include('admin.layouts.nav')

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            @include('admin.layouts.footer')

        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('admin.layouts.scripts')
</body>
</html>
