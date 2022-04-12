<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:28:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}frontend/assets/images/fev-icon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>newspaper -@yield('title')</title>
   @include('frontend.includes.assets.css')
</head>

<body>
<div class="se-pre-con"></div>
<header>
    <!-- Mobile Menu Start -->
    @include('frontend.includes.header.mobile-menu')
    <!-- Mobile Menu End -->
    <!-- top header -->
    <div class="top_header hidden-xs">
      @include('frontend.includes.header.top-header')
    </div>
    @include('frontend.includes.header.top-banner')
    <!-- navber -->
    <div class="container hidden-xs">

        @include('frontend.includes.header.navbar')
    </div>
</header>
<!-- header news Area
    ============================================ -->

@yield('body')

<!-- container end -->


<!-- footer Area
    ============================================ -->

        @include('frontend.includes.footer.top-footer')
<div class="sub-footer">
    <!-- sub footer -->
    @include('frontend.includes.footer.sub-footer')
</div>
<!-- /.sub footer -->

@include('frontend.includes.assets.js')
</body>


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:29:20 GMT -->
</html>

