<template>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Заголовок
                </th>
                <th>
                    <a href="#" class="btn btn-success" @click.prevent="createTag(addTag)">+</a>
                    <input v-model="addTag">
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="tags in getTag">
                <td>
                    {{tags.id}}
                </td>
                <td>
                    <input v-model="tags.title">
                </td>
                <td>
                    <a href="#" class="btn btn-dark m-2" @click.prevent="updateTag(tags.id, tags.title)">Править</a>
                    <a href="#" class="btn btn-danger m-2" @click.prevent="deleteTag(tags.id)">Удалить</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "AdminTagComponent",
    data(){
            return{
                getTag: {},
                title:null,
                redactorActive:null,
                addTag:null
            }

    },
        mounted() {
            this.getTags()
        },
        methods:{
            getTags() {
                axios.get('/api/adm_panel/tags_admin').then(res=>{
                    this.getTag = res.data
                }).catch(function (error) {
                    console.log(error)
                })

            },
            updateTag(id, title){
                axios.patch('/api/adm_panel/tags_admin/' + id, {title:title}).then(res=>{
                    this.getTags()
                    alert('Обновление успешно выполнено')
                }).catch(function (error) {
                    console.log(error)
                    alert("Обновление было прервано по ошибке")
                })
            },
            deleteTag(id){
                axios.delete('/api/adm_panel/tags_admin/' + id).then(res=>{
                    this.getTags()
                    alert("Запись успешно была удалена")
                }).catch(function (error) {
                    console.log(error)
                    alert('Произошла ошибка при удалении, обратитесь в консоль')
                })
            },
            createTag(title){
                axios.post('/api/adm_panel/tags_admin/',{title:title}).then(res=>{
                    this.getTags()
                    alert("Запись успешно была добавлена")
                }).catch(function (error) {
                    console.log(error)
                    alert('Произошла ошибка при удалении, обратитесь в консоль')
                })
            }
    }



    }

</script>

<style scoped>

</style>
