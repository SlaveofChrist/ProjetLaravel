<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Connexion</title>
<!--Scripts-->

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
        <div>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}">Pharmapp</a>   
                </div>
            </nav>

            <br />
            <br />
            @yield('content')
            <br />
        </div>
        <script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
