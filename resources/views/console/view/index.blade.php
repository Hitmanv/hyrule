@@extends('admin.master')

@@section('page-title')
    {{ $name }}管理
@@endsection

@@section('page-sub-title')
    {{ $name }}列表
@@endsection


@@section('content')
    <div class="wrapper">
        <div class="panel">
            <div class="panel-heading">
                {{ $name }}列表
                <span class="tools pull-right"><a class="t-collapse fa fa-chevron-down" href="javascript:;"></a></span>
            </div>
            <div class="panel-body">
                <table class="table table-striped custom-table table-hover">
                    <thead>
                    <tr>
                        <th>编号</th>
                    </tr>
                    </thead>
                    <tbody>
                    @@foreach(${{ str_plural($name) }} as ${{ $name }})
                         <tr>
                             <td>${{ $name }}->id</td>
                         </tr>
                    @@endforeach
                    </tbody>
                </table>
                {!! "{!!" !!} {!! "$" . str_plural($name) . "->links()" !!}  !!}
            </div>
        </div>
    </div>
@@endsection