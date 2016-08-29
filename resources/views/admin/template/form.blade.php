@extends('admin.master')


@section('page-title')
    表单设计
@endsection

@section('page-sub-title')
    表单管理
@endsection


@section('content')
    <div class="wrapper">
        <form id="form1">
            <div class="panel">
                <div class="panel-heading">
                    自有属性
                    <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down"
                                                      href="javascript:;"></a></span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>标题</label>
                        <input type="text" v-model="title" class="form-control">
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    嵌套属性
                    <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down"
                                                      href="javascript:;"></a></span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <button class="btn btn-success" type="button" @click="addTag">添加标签</button>
                    </div>
                    <div class="form-group">
                        <div v-for="tag in tags">
                            @{{ tag.name }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    提交
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <button type="button" class="btn btn-success" @click="submit">保存</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('script')
    <script src="/js/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>
    <script>
        const vm = new Vue({
            el: '#form1',
            data: {
                title: 'name',
                tags: []
            },
            methods: {
                addTag: function(){
                    this.tags.push({name: 'hitman'});
                },
                submit: function(){
                    this.$http.post('form', JSON.stringify(this.$data));
                }
            }
        });
    </script>
@endsection