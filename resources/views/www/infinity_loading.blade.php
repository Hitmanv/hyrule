@extends('www.master')


@section('content')
    <div class="container" id="app">
        <ul class="list-group">
            <li class="list-group-item" v-for="item in items">@{{ item }}</li>
            <infinite-loading spinner="bubbles" :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>
        </ul>
    </div>

    <script>
        var vm = new Vue({
            el: '#app',
            created: function(){
                for(var i=0; i<20; i++){
                    this.items.push(i);
                }
            },
            data: {
                items: []
            },
            methods: {
                onInfinite: function(){
                   var self = this;
                    setTimeout(function(){
                        var temp = [];
                        for(var i=self.items.length-1; i<self.items.length+20; i++){
                            temp.push(i);
                        }
                        self.items = self.items.concat(temp);
                        self.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                   }, 1000);
                }
            }
        });
    </script>
@endsection