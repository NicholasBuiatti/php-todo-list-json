const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
        }
    },
    methods: {
        checked(index) {
            console.log(this.toDoList);
            if (this.toDoList[index].checked == 'true') {
                this.toDoList[index].checked = 'false'
            } else {
                this.toDoList[index].checked = 'true'
            }
        }
    },
    mounted() {
        console.log("prova VUE");

        axios.get("./server.php").then(results => {

            this.toDoList = results.data;
        });
    }
}).mount('#app')