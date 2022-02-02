const app = new Vue({
    el: '#app',
    data: {
        cards: [],
    },
    created() {
        axios.get('http://localhost:88/php-ajax-dischi/server/controller-api.php')
        .then((result) => {
            this.cards = result.data.results;
            console.log(result.data.results);
            console.log(this.cards);
        })
        .catch((error)=>{
            console.log(error);
        });
    }
});