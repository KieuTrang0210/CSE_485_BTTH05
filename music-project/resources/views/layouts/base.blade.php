<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title: khac nhau giua cac trang -->
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <!-- header: giong nhau -->
    @include('layouts.header')
    <!-- main content : khac nhau -->
    <div class="container-fluid">
        @yield('main')
    </div>
    <!-- footer: giong nhau -->
    @include('layouts.footer')
    <script src="{{ asset('js/boostrap.bundle.js') }}"></script>
</body>
</html>