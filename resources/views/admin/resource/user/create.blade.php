@extends('admin.master')

@section('page-title')
    resource.user管理
@endsection

@section('page-sub-title')
    创建resource.user
@endsection


@section('content')
    <div class="wrapper">
        <div class="panel">
            <div class="panel-heading">
                创建resource.user
                <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down" href="javascript:;"></a></span>
            </div>
            <div class="panel-body">
                <form action="/users" method="post">
                    {!! csrf_field() !!}}
                    <div class="form-group">
                        <label></label>
                        <input type="text" class="form-control" name="id" value="{{  $user->id }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">创建</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection