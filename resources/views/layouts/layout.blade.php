<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/medical_appointments.css')}}" rel="stylesheet">
    <!-- Icons of FontAwesome -->
    <script src="{{asset('js/all.min.js')}}"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-light bg-white border-bottom">
    <a class="navbar-brand text-monospace text-primary" href="{{ route('home') }}"><i class="fas fa-clinic-medical mr-3"></i>Clinica UPTT</a>
    </nav>
    <div class="container bg-white border rounded pt-4 pb-4 mt-4 mb-4">
    @yield('content')
    </div>
    <script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

</body>
</html>