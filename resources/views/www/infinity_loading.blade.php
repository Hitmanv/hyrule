@extends('www.master')


@section('content')
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
    <div class="container" id="app">
        <ul class="list-group" v-cloak>
            <li class="list-group-item" v-for="item in items">@{{ item }}</li>
            <infinite-loading spinner="bubbles" :on-infinite="onInfinite" ref="infiniteLoading">
                <span slot="no-more">
                  已经木有数据啦
                </span>
            </infinite-loading>
        </ul>
    </div>
@endsection