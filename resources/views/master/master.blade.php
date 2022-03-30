<!DOCTYPE html>
<html lang="en">

<head>
@include('master/layouts/head')
   @include('master/layouts/css')

</head>

<body>
<!-- Topbar Start -->
@include('master/layouts/topbar')
<!-- Topbar End -->


<!-- Navbar Start -->
@include('master/layouts/navbar')
<!-- Navbar End -->



@yield('main')


<!-- Footer Start -->
@include('master/layouts/footer')
<!-- Footer End -->
@include('master.js')

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


</body>

</html>
