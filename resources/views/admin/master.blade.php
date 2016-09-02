<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta id="_token" name="_token" value="{{ csrf_token() }}">
    <title>SlickLab - Responsive Admin Dashboard Template</title>
    <link href="/css/slicklab.css" rel="stylesheet">
    @yield('css')
</head>

<body class="sticky-header">

<section>
    @include('admin.sidebar')
    <div class="body-content" >
        <div class="header-section">
            <div class="logo dark-logo-bg hidden-xs hidden-sm">
                <a href="#">
                    <i class="fa fa-dollar"></i>
                    <span class="brand-name" style="font-size: 17px;">管理后台</span>
                </a>
            </div>

            <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                <a href="#">
                    <i class="fa fa-dollar"></i>
                </a>
            </div>
            <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
            <div class="right-notification">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle">
                            退出登陆
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-head">
        <h3>
        @yield("page-title")
        </h3>
        <span class="sub-title">@yield('page-sub-title')</span>
        </div>
        @yield('content')
        <footer>
            2016 &copy; FinIP.
        </footer>
    </div>
</section>
<script src="/js/slicklab.js"></script>
@yield('script')
</body>
</html>
