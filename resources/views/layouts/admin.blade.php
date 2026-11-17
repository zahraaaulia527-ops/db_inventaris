<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layouts Admin</title>
     
     <!--Panggil Font-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.cs')}}" rel="stylesheet" type="text/css"
    <link href="https://fonts.googleapis.com/css?family=Nunito:200, 200i, 300, 300i, 600, 600i, 900, 900i" rel="stylesheet">
    <!--Panggil style dari tample-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @stack('styles')
    
</head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex" flex-olum">

        <div id="content">
            @include ('layouts.topbar')

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto"> 
                <div class="copyright text-center my-auto">
                    <span>copyright &copy; SMK Texmaco {{ date ('Y')}}</span>
                </div>
            </div>
        </footer>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
</a>

<!--JavaScript template-->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootsrap.bundle.min.js')}}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

</body>
</html>