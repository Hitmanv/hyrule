<div class="sidebar-left">
    <!--responsive view logo start-->
    <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
        <a href="/dashboard">
            <img src="#" alt="">
            <!--<i class="fa fa-maxcdn"></i>-->
            <span class="brand-name">后台模板</span>
        </a>
    </div>
    <!--responsive view logo end-->

    <div class="sidebar-left-info">
        <!-- visible small devices start-->
        <div class=" search-field">  </div>
        <!-- visible small devices end-->

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked side-navigation">
            <li>
                <h3 class="navigation-title">目录</h3>
            </li>
            <li><a href="/dashboard"><i class="fa fa-home"></i> <span>总览</span></a></li>
            <li class="menu-list">
                <a href="#"><i class="fa fa-book"></i>  <span>用户管理</span></a>
                <ul class="child-list">
                    <li><a href="/users">用户列表</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="fa fa-book"></i>  <span>资源管理</span></a>
                <ul class="child-list">
                    <?php
                    $_resources = config('resource') ;
                    $_resourcesSideBar = collect($_resources)->map(function($r){ $url = "/" . str_plural($r); return "<li><a href='{$url}'>{$r}管理</a></li>"; });
                    ?>
                    {!! $_resourcesSideBar->implode('') !!}
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="fa fa-book"></i>  <span>模板</span></a>
                <ul class="child-list">
                    <li><a href="/form">嵌套表单</a></li>
                    <li><a href="/route">前端模板</a></li>
                    <li><a href="/upload">文件上传</a></li>
                </ul>
            </li>
        </ul>
        <!--sidebar nav end-->
    </div>
</div>