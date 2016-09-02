<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek" />
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>SlickLab - Responsive Admin Dashboard Template</title>

    <link href="/css/slicklab.css" rel="stylesheet">
    @yield('css')
</head>

<body class="sticky-header">

<section>
    @include('admin.sidebar')
            <!-- body content start-->
    <div class="body-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--logo and logo icon start-->
            <div class="logo dark-logo-bg hidden-xs hidden-sm">
                <a href="#">
                    <i class="fa fa-dollar"></i>
                    <span class="brand-name" style="font-size: 17px;">管理后台</span>
                    {{--<span class="brand-name">DZF</span>--}}
                </a>
            </div>

            <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                <a href="#">
                    <i class="fa fa-dollar"></i>
                </a>
            </div>
            <!--logo and logo icon end-->

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
            <!--toggle button end-->
            <!--right notification start-->
            <div class="right-notification">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle">
                            退出登陆
                        </a>
                    </li>
                </ul>
            </div>
            <!--right notification end-->
        </div>
        <!-- header section end-->

        <!-- page head start-->
        <div class="page-head">
        <h3>
        @yield("page-title")
        </h3>
        <span class="sub-title">@yield('page-sub-title')</span>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
        @yield('content')
                <!--body wrapper end-->


        <!--footer section start-->
        <footer>
            2016 &copy; FinIP.
        </footer>
        <!--footer section end-->
    </div>
    <!-- body content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/js/slicklab.js"></script>

@yield('script')

</body>
</html>
