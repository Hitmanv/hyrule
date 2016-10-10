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
                        <div class="input-group">
                            <input type="text" placeholder="文件地址" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button" id="upload">上传</button>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="文件地址" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button" id="upload2">上传</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function upload(id, domain, onUploaded, onError){
            Qiniu.uploader({
                runtimes: 'html5,flash,html4',
                browse_button: id,
                uptoken_url: '/uptoken',
                unique_names: true,
                get_new_uptoken: false,
                domain: domain,
                max_file_size: '100mb',
                max_retries: 3,
                chunk_size: '4mb',
                auto_start: true,
                init: {
                    'FileUploaded': onUploaded,
                    'Error': onError,
                }
            });
        }

        $(function () {
            upload('upload', 'hitman', function(up, file, info){
                var res = JSON.parse(info);
                var src = window.qiniu_domain + res.key;
                console.log(src);
            }, function(){});

        });
    </script>
@endsection