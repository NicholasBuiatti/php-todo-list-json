const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
        }
    },
    mounted() {
        console.log("prova VUE");

        axios.get("./server.php").then(results => {

            this.toDoList = results.data;
        });
    }
}).mount('#app')