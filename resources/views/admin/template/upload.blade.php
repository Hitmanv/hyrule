@extends('admin.master')


@section('page-title')
    上传文件
@endsection

@section('page-sub-title')
    上传文件
@endsection


@section('content')
    <div class="wrapper" id="app">
        <div class="panel">
            <div class="panel-heading">
                七牛上传
                <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down" href="javascript:;"></a></span>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="btn btn-primary">
                            上传 <input type="file" class="hide" name="file" @change="upload">
                        </label>
                        {{--<button class="btn btn-success">提交</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
            var vm = new Vue({
                el: '#app',
                data: {
                    images: []
                },
                methods: {
                    upload: function(event){
                        var file = event.target.files[0];
                        var formdata = new FormData;
                        formdata.append('file', file);
                        $.ajax({
                            url: "/upload",
                            method: 'post',
                            data: formdata,
                            processData: false,
                            contentType: false,
                            headers: {'X-XSRF-TOKEN': '{{ encrypt(csrf_token()) }}'},
                            success: function (data) {
                                console.log(data);
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection