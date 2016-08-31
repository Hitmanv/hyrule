@extends('admin.master')


@section('page-title')
    模板列表
@endsection

@section('page-sub-title')
    前端模板
@endsection


@section('content')
    <div class="wrapper">
        <div class="panel">
            <div class="panel-heading">
                前端路由演示
                <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down" href="javascript:;"></a></span>
            </div>
            <div class="panel-body">
                <div id="app">
                    <h1>Hello App!</h1>
                    <p>
                        <!-- 使用指令 v-link 进行导航。 -->
                        <a v-link="{ path: '/foo' }">Go to Foo</a>
                        <a v-link="{ path: '/bar' }">Go to Bar</a>
                    </p>
                    <!-- 路由外链 -->
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/vue.router/0.7.10/vue-router.min.js"></script>
    <script src="/js/template/vue-router.js"></script>
@endsection