<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zakir Tourism</title>
    <link rel="stylesheet" href="{{ asset('admin/backend/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/backend/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/backend/css/styles.css')}}">
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    @include('includes.admin.headerNavigation')
    <div class="main-container">
        @include('includes.admin.sidebarNavigation')
        @yield('content')
    </div>
</div>
<script src="{{ asset('admin/backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin/backend/vendor/popper.js/popper.min.js')}}"></script>
<script src="{{ asset('admin/backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/backend/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{ asset('admin/backend/js/carbon.js')}}"></script>
<script src="{{ asset('admin/backend/js/demo.js')}}"></script>

</body>
</html>
