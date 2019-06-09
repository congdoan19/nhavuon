
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Nhà Vườn Khánh Võ cây cảnh, cây giống nhập ngoại, giao hàng toàn quốc')</title>
        <meta name="title" content="Nhà Vườn Khánh Võ cây cảnh, cây giống nhập ngoại, giao hàng toàn quốc">
        <meta name="description" content="Nhà vườn Khánh Võ chuyên cây cảnh, cây giống, cây ăn trái nhập ngoại như cây Cherry, cây Nho Thân Gỗ, Vú sữa hoàng kim. Giao hàng toàn quốc">
        <meta name="keywords" content="cây cảnh, cây giống, cây ăn trái nhập, cây Cherry, cây Nho Thân Gỗ, Vú sữa hoàng kim, Nhà vườn Khánh Võ">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="Nhà Vườn Khánh Võ">

        <!-- fav icon -->
        <link href="{{url('/assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">

        <!-- Bootstrap -->
        <link href="{{url('/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- animated-css -->
        <link href="{{url('/assets/css/animate.min.css')}}" rel="stylesheet" type="text/css">
        <!-- font-awesome-css -->
        <link href="{{url('/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- owl-carrosel-css -->
        <link href="{{url('/assets/owl-carrosel/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('/assets/owl-carrosel/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
        <!-- offcanvas-menu-css -->
        <link href="{{url('/assets/css/offcanvas-menu.css')}}" rel="stylesheet" type="text/css">
        <!-- style-css -->
        <link href="{{url('/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        @yield('header')

    </head>
    
    
    
    
    <body class="@yield('css')">
        @include('frontEnd.layouts.preload')
        @include('frontEnd.layouts.header')
        @yield('content')
        @include('frontEnd.layouts.footer')
        @include('frontEnd.layouts.menucanvas')
        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div> <!-- totop -->
        

        <script src="{{url('/assets/js/jquery.js')}}"></script>
        <script src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        @yield('footer')
        <script src="{{url('/assets/js/jquery.inview.min.js')}}"></script>
        <script src="{{url('/assets/js/portfolio.js')}}"></script>
        <script src="{{url('/assets/js/wow.js')}}"></script>
        <script src="{{url('/assets/js/lightbox.js')}}"></script>
        <script src="{{url('/assets/owl-carrosel/owl.carousel.min.js')}}"></script>
        <script src="{{url('/assets/js/slider.js')}}"></script>
        <script src="{{url('/assets/js/script.js')}}"></script>
    </body>
</html>