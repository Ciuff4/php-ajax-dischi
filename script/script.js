const app = new Vue({
    el: '#app',
    data:{
        apiUrl:'http://localhost/ajax/php-ajax-dischi/script/api.php',
        posts:[],
    },
    mounted(){
        this.getApiUrl()
    },
    methods:{
        getApiUrl(){
            axios.get(this.apiUrl)
            .then(r=>{
                this.posts = r.data;
                console.log(this.posts);
            })
            .catch(e=>{
                console.log(e);
            })
        }
    }
})
