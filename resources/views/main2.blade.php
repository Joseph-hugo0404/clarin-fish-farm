@extends('page')

@section('body')

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
                @include('messages')

                @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->>

    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->

<!-- Logout Modal-->

@endsection
