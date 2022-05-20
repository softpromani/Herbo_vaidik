<!DOCTYPE html>
<html lang="en">
<head>
    @include('Layouts.front_end.head')

    <title>Herbo-Vedik : : @yield('title')</title>

  @yield('Header_Area')
</head>
<body>

<!-- pre loader start -->
<div class="pa-preloader">
    <div class="pa-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- pre loader end -->

<!-- main wrapper start -->
<div class="pa-main-wrapper">
    @include('Layouts.front_end.header')



    @yield('Content_Area')



        


    @include('Layouts.front_end.footer')
    @include('Layouts.front_end.authModals')
</div>
<!-- main wrapper end -->
@include('Layouts.front_end.foot')
</body>
</html>