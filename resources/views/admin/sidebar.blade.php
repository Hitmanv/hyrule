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
                    $_resourcesSideBar = collect($_resources)->map(function($r){
                        $url = "/" . str_plural($r);
                        $zh = trans('resource.' . $r);
                        return "<li><a href='{$url}'>{$zh}管理</a></li>";
                    });
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
            <li class="menu-list">
                <a href="#"><i class="fa fa-book"></i>  <span>工具</span></a>
                <ul class="child-list">
                    <li><a href="#" data-toggle="modal" data-target="#_upload">文件上传</a></li>
                </ul>
            </li>
        </ul>
        <!--sidebar nav end-->
        <div class="modal fade" id="_upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">上传文件</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>文件地址</label>
                            <div class="input-group">
                                <input type="text" placeholder="文件地址" class="form-control" id="_upload_url">
                                <span class="input-group-btn">
                                    <button class="btn btn-info copy" data-dismiss="modal" data-clipboard-target="#_upload_url" data-clipboard-action="cut">复制</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" id="pickfiles">上传</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>