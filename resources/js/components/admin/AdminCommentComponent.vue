<template>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Email
                </th>
                <th>
                    Текст
                </th>
                <th>
                    Дата
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="comments in getComment">
                <td>
                    {{comments.id}}
                </td>
                <td>
                    {{comments.name}}
                </td>
                <td>
                    {{comments.email}}
                </td>

                <td>
                    {{getRelationships(comments.metric_id)}}
                </td>
                <td>
                    5
                </td>

                <td>
                    <a href="#" class="btn btn-dark m-2">Править</a>
                    <a href="#" class="btn btn-danger m-2">Удалить</a>
                    <a href="#" class="btn btn-success m-2">Одобрить</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

</template>

<script>
    export default {
        name: "AdminCommentComponent",
        data(){
          return{
              getComment: null,
              urlMetric: null,
          }
        },
        mounted() {
            this.getComments()
            //this.getRelationships(1)
        },
        methods:{
            getComments(){
                axios.get('/api/adm_panel/comments_admin').then(res=>{
                    this.getComment = res.data
                    return this.getComment

                }).catch(function(error){
                    alert('Произошла ошибка вывода, просьба обратиться в консоль')
                    console.log(error)
                })
            },
            getRelationships(id){
                axios.get('/api/adm_panel/comments_admin/' + id).then(res=>{
                    this.urlMetric = res.data
                    console.log(res)
                }).catch(function(error){
                    alert('Произошла ошибка вывода, просьба обратиться в консоль')
                    console.log(error)
                })
            }
        }
    }
</script>

<style scoped>

</style>
