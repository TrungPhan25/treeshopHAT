
<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body  >

<div class="spinner">
<div class="blob blob-0"></div>
</div>
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
