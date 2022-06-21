
<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body ><!-- class="animsition" -->



<!-- Header -->
@include('component.header')

@include('cart')

<!-- content -->
@yield('content')



<!-- Footer -->
@include('component.footer')
@include('foot')

</body>
</html>
