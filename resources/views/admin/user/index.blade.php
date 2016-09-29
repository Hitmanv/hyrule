@extends('admin.master')

@section('page-title')用户管理@endsection

@section('page-sub-title')用户列表@endsection


@section('content')
    <div class="wrapper">
        <div class="panel">
            <div class="panel-heading">
                用户列表
                <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down" href="javascript:;"></a></span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <table class="table table-striped custom-table table-hover">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>用户名</th>
                        <th>email</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection