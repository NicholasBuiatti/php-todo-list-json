const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
            task: 'prova',
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
            newTask = {
                "toDo": this.task,
                "checked": true
            }
            this.toDoList.push(newTask)
        }
    },
    mounted() {
        console.log("prova VUE");

        axios.get("./list.php").then(results => {

            this.toDoList = results.data;
        });
    }
}).mount('#app')