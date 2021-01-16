const app = new Vue({
    el: "#root",
    data: {
        posts: null
    },
    methods:{
        getJsonData: function(){
            fetch('http://localhost/oop-php-rest-api/').then(response => response.json()).then((post) => {
                this.posts = post;
            });
        }
    }
});

Vue.component('post', {
    props: ['title', 'body', 'creator', 'date'],
    template: '<div><h3>{{ title }}</h3><p>{{ body }}</p><h5>{{ creator }}</h5><h6>{{ date }}</h6></div>'
});