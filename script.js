// const app = new Vue({
//     el: "#root",
//     data: {
//         posts: null
//     },
//     methods:{
//         getJsonData: function(){
//             fetch('http://localhost/oop-php-rest-api/').then(response => response.json()).then((post) => {
//                 this.posts = post;
//             });
//         }
//     }
// });

// Vue.component('post', {
//     props: ['title', 'body', 'creator', 'date'],
//     template: '<div><h3>{{ title }}</h3><p>{{ body }}</p><h5>{{ creator }}</h5><h6>{{ date }}</h6></div>'
// });


// fetch('http://localhost/oop-php-rest-api/?action=getPosts').then(response => response.json()).then((post) => {
//     console.log(post);
// });

let data = [3, "AJAX", "lorem blabla", 5];

let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
    }
  };
  xhttp.open("POST", "http://localhost/oop-php-rest-api/create_post.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("c=3&t=Ajax&b=Lorem whatever&cr=5");