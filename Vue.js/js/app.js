var app = new Vue({
    el: "#app",
    data: {
      newTask: "",
      tasks: [
        { title: "Aprendible PHP", completed: true },
        { title: "Aprendible Laravel", completed: false },
        { title: "Aprendible VueJS", completed: true },
      ],
    },
    methods: {



      addTask: function () {
        if (this.newTask.length <= 1) return alert("Tarea vacia");

        //Con el metodo Push añadimos un nuevo elemento
        this.tasks.push({
          title: this.newTask,
          completed: false,
        });
        this.newTask = "";
      },


      taskClasses: function (task){
        console.log('css changed')
        return ['glyphicon' , task.completed ? 'glyphicon-check' : 'glyphicon-unchecked']
      },

      completeTask: function(task){
        task.completed =  ! task.completed
      }
    },
    computed: {
      completedTasks: function () {
        return this.tasks.filter(function (task) {
          return task.completed;
        }).length;
      },
      incompletedTasks: function () {
        return this.tasks.filter(function (task) {
          return !task.completed;
        }).length;
      },
    },
  });
