import Bar from "./view/test.vue";

// 定义组件
var Foo = Vue.extend({
    template: '<p>This is foo!</p>'
});


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


