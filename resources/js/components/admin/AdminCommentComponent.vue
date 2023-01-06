<template>
    <div class="table">
        <table class="table table-bordered">
            <thead class="thead-dark" >
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
            <tbody v-for="comments in parentArr">
    <tr>
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
                <a href="" @click.prevent="this.replyForm = comments.id" class="btn-sm btn-primary mt-10">
                    Ответить
                </a>
            </p>
            <div v-if="this.replyForm==comments.id">
                <p>
                    <textarea v-model="replyText" class="m-10" rows="11"></textarea>

                </p>
                <p>
                    <a href="#" @click.prevent="replyComment(this.replyText, this.adminName, this.adminEmail, comments.metric_id, comments.id)" class="btn-sm btn-dark mb-11">Отправить ➥</a>
                    <a href="#" @click.prevent="this.replyForm = false" class="btn-sm btn-danger ml-10">✖</a>
                </p>

            </div>



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

    <tr v-for="comments_reply in replyArr" class="bg-gradient-light">
        <template v-if="comments_reply.parent_id == comments.id">
        <td>
            ➥
        </td>
        <td>
            {{comments_reply.name}}
        </td>
        <td>
            {{comments_reply.email}}
        </td>

        <td>
            {{comments_reply.text}}
        </td>
        <td>
            <p>
                <a :href="'/' + comments_reply.metrics.url" target="_blank">
                    {{comments_reply.metrics.title}}
                </a>
            </p>
            <p>
                <a href="" @click.prevent="this.replyForm = comments_reply.id" class="btn-sm btn-primary mt-10">
                    Ответить
                </a>
            </p>
            <div v-if="this.replyForm==comments_reply.id">
                <p>
                    <textarea v-model="replyText" class="m-10" rows="11"></textarea>

                </p>
                <p>
                    <a href="#" @click.prevent="replyComment(this.replyText, this.adminName, this.adminEmail, comments_reply.metric_id, comments_reply.id)" class="btn-sm btn-dark mb-11">Отправить ➥</a>
                    <a href="#" @click.prevent="this.replyForm = false" class="btn-sm btn-danger ml-10">✖</a>
                </p>

            </div>



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
</template>

    </tr>
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
              replyForm: false,
              replyText:null,
              adminEmail:'admin@mail.ru',
              adminName:'Администрация',
              replyArr: [],
              parentArr:[]
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
                    //Array reply comments
                    this.replyArr = res.data.filter(function (reply) {
                        return reply.parent_id >0;
                    })
                    this.parentArr = res.data.filter(function (parent) {
                        return parent.parent_id == null;
                    })
                    console.log(this.parentArr)

                    return this.getComment

                }).catch(function(error){
                    alert('Произошла ошибка вывода, просьба обратиться в консоль')
                    console.log(error)
                })
            },
            replyComment(text, name, email, metric_id,parent_id){
                axios.post('/api/adm_panel/comments_admin',{text:text, name:name, email:email, metric_id:metric_id, parent_id:parent_id}).then(res=>{

                    this.replyText = null
                    this.replyForm = false
                    this.getComments()
                    alert('Ответ успешно опубликован')

                }).catch(function(error){
                    alert('Произошла ошибка при отправке, просьба обратиться в консоль')
                    console.log(error)
                })
            },

        }
    }
</script>

<style scoped>

</style>
