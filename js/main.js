const { createApp } = Vue;

createApp({

    data() {
        return {
            apiUrl: 'server.php',
            cards: []
        }
    },

    methods: {
        getCards() {
            axios.get(this.apiUrl)
                .then(result => {
                    this.cards = result.data;
                    console.log(result.data);
                })
        }
    },

    mounted() {
        this.getCards('');
    }
}).mount('#app')