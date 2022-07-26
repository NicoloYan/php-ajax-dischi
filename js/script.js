var app = new Vue (
    {
        el: '#app',
        data: {
            albums: []
        },
        methods: {
            getAlbums() {
                axios.get('http://localhost:8888/php-ajax-dischi/api.php')
                .then((response) => {
                    this.albums = response.data;
                    console.log(this.albums)
                });
            }
        },
        mounted() {
            this.getAlbums();
        }
    }
)