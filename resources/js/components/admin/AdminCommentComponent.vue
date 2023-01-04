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
                    Ссылка
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
                    {{comments.text}}
                </td>
                <td>
                    <p>
                        <a :href="'/' + comments.metrics.url" target="_blank">
                            {{comments.metrics.title}}
                        </a>
                    </p>
                    <p>
                        <a href="#" class="btn-sm btn-primary mt-10">
                            Ответить
                        </a>
                    </p>



                </td>

                <td>
                    <a href="#" class="btn btn-dark m-2">Править</a>
                    <a href="#" class="btn btn-danger m-2">Удалить</a>
                    <p v-if="comments.public == 'Нет'">
                        <a href="#" class="btn btn-success m-2">Одобрить</a>
                    </p>
                    <p v-else >
                        <a href="#" class="btn btn-outline-danger m-2">Скрыть</a>
                    </p>

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

        }
    }
</script>

<style scoped>

</style>
