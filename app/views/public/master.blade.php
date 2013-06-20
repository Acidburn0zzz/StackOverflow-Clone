<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SO Clone</title>
    <script src="/assets/js/jquery-1.10.1.min.js"></script>
    <script src="/assets/js/jquery-ui-1.10.3.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
</head>
<body>
    
    @include('public.partials.navbar')
    
    <div class="container">
        
        @include('public.partials.header')

        @yield('content')        
    </div>

    @include('public.partials.footer')
</body>
</html>