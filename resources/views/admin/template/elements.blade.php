@extends('admin.master')


@section('page-title')
    后台元素
@endsection

@section('page-sub-title')
    后台元素集合
@endsection


@section('content')
    <div class="wrapper">
        <div class="panel">
            <div class="panel-heading">
                表单元素
                <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down" href="javascript:;"></a></span>
            </div>
            <div class="panel-body">
                <form action="">
                    <div class="form-group">
                        <label>select 2</label>
                        <select class="form-control select2">
                            <option></option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin/template/elements.css">
@endsection

@section('script')
    <script src="/js/admin/template/elements.js"></script>
@endsection


