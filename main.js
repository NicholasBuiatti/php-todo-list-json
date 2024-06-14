const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
            task: '',
        }
    },
    methods: {
        checked(index) {
            console.log(this.toDoList);
            if (this.toDoList[index].checked == true) {
                this.toDoList[index].checked = false
            } else {
                this.toDoList[index].checked = true
            }
        },
        addTask() {
            // CREAZIONE OGGETTO DA PUSHARE con i riferimenti per il $_get
            const newTask = {
                task: this.task,
                // checked: true
            }

            postRequestConfig = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            // INVIO I DATI CON AXIOS METODO POST PER LA SCRITTURA SUL "DB"
            axios.post('./create.php', newTask, postRequestConfig).then(results => {
                this.toDoList = results.data;
            });

            this.task = ''
        }
    },
    mounted() {
        console.log("prova VUE");

        axios.get("./list.php").then(results => {

            this.toDoList = results.data;
        });
    }
}).mount('#app')