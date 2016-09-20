@extends('admin.master')


@section('page-title')
    加载动画
@endsection

@section('page-sub-title')
    加载动画
@endsection


@section('content')
    <div class="wrapper" id="app">
        <div style="height: 200px; width: 100%;">
            <pulse-loader :loading='loading' :color="color" :size="size" :margin="margin" :radius="radius"></pulse-loader>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/vue-spinner.min.js"></script>
    <script>
        var PulseLoader = VueSpinner.PulseLoader;

        new Vue({
            el: '#app',
            components: {
                PulseLoader
            },
            data: {
                    color: '#3AB982',
                    margin: '20px',
                    radius: '10px',
                    size: '30px',
                    loading: false
            }
        })
    </script>
@endsection