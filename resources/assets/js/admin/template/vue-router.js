// 定义组件

import Foo from './view/foo.vue';
import Bar from './view/bar.vue';

var App = Vue.extend({});

var router = new VueRouter();

router.map({
    '/foo': {
        component: Foo
    },
    '/bar': {
        component: Bar
    }
});

router.start(App, '#app');


