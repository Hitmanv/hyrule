/**
 * Created by hitman on 30/9/2016.
 */
$(function(){
    $('.summernote').summernote({
        height: 300,                 // set editor height

        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor

        focus: true,                 // set focus to editable area after initializing summernote
        lang: 'zh-CN'
    });

    // 文件上传
    var uploader = Qiniu.uploader({
        runtimes: 'html5,flash,html4',      // 上传模式，依次退化
        browse_button: 'pickfiles',         // 上传选择的点选按钮，必需
        uptoken_url: '/uptoken',         // Ajax请求uptoken的Url，强烈建议设置（服务端提供）

        unique_names: true,
        get_new_uptoken: false,             // 设置上传文件的时候是否每次都重新获取新的uptoken
        domain: 'hitman',     // bucket域名，下载资源时用到，必需
        max_file_size: '100mb',             // 最大文件体积限制
        max_retries: 3,                     // 上传失败最大重试次数
        chunk_size: '4mb',                  // 分块上传时，每块的体积
        auto_start: true,                   // 选择文件后自动上传，若关闭需要自己绑定事件触发上传
        init: {
            'FileUploaded': function(up, file, info) {
                var res = JSON.parse(info);
                var src = window.qiniu_domain + res.key;
                //console.log(src);
                $('#_upload_url').val(src);
                    },
            'Error': function(up, err, errTip) {
                alert('上传出错');
            }
        }
    });

    $('.img-upload').change(function(){
        $('.thumbnail', $(this).parent().parent()).attr('src', $(this).val());
    });

    // 复制
    var clipboard = new Clipboard('.copy');

});