<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>My Tasks</h3>
                 <ul class="list-group">
                 <transition-group name="list-complete" tag="p">
                    <li class="list-group-item list-complete-item" v-for="(value,key) in list" v-bind:key="key">
                        {{ value.body }} 
                        <span class="pull-right" @click="deleteTask(key)"><i class="fa fa-close">X</i></span>
                    </li>
                </transition-group>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.fetchTaskList();
        },
        data:function() {
            return {
                list : []
            };
        },
        methods:{
            fetchTaskList(){
                this.$http.get('api/tasks').then(
                function(response) {
                    this.list = response.body;
                },function(error) {
                    console.log(error);
                });
            },
            deleteTask(task){
                console.log(task)
                this.list.splice(task,1);
            }
        }
    }
</script>


<style scoped>
.list-complete-item {
  transition: all 2s;
}
.list-complete-enter, .list-complete-leave-active {
  opacity: 0;
  transform: translateX(30px);
}
.list-complete-leave-active {
  position: absolute;
}
</style>