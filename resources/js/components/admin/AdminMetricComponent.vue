<template>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Таблица метрик сайта</h4>
                <p><a href="#" @click="this.hidenForm = true" class="btn btn-success ">Добавить</a>
                <template v-if="this.hidenForm">
                    <a @click="this.hidenForm=false" href="#" class="btn btn-danger m-4">Х</a>
                </template>
                </p>
                <div v-if="this.hidenForm" class="col-lg-12 m-4" style="border: black 1px dotted">
                    <div class="row text-center">
                        <div class="col-lg-12 m-4">
                            <h2>Title</h2>
                            <textarea  v-model="titleForm" cols="50" rows="2" placeholder="Укажите заголовок страницы"></textarea>

                        </div>

                        <div class="col-lg-12 row">
                            <h2 class="col-lg-12">Выберите метрику
                                    <label for="image" class="btn btn-success">➕</label>
                                    <input id="image" name="image" ref="addImg" style="visibility:hidden;" @change="addImages()" type="file">


                            </h2>

                                <div  class="overflow-scroll img-metric">
                                    <template v-for="directive in this.directiveImg">
                                        <a  @click.prevent="this.successImage(directive)" href="#" class="btn col-lg-4">
                                            <img @click="deleteImage(directive)" src="/public/admin/image/delete.png">
                                            <img :src="'/public/storage/thumbnail/thumbnail-'+ directive"  class="img-metric-admin">
                                            <img v-if="this.activeImg == directive" src="/public/admin/image/verification.png">

                                        </a>
                                    </template>


                                </div>


                        </div>
                        <div class="col-lg-12 m-4">
                            <h2>Description</h2>
                            <textarea  v-model="descriptionForm" cols="50" rows="4" placeholder="Описание для поисковиков"></textarea>

                        </div>
                        <div class="col-lg-12 ">
                            <h2>Краткая информация</h2>
                            <ckeditor id="editor1" v-model="editorData" :config="editorConfig"></ckeditor>
                        </div>
                        <div class="col-lg-12 row">
                            <h2 class="col-lg-12">Доступ ({{this.priseForm}})</h2>

                            <div class="col-lg-4">
                                    <a href="" @click.prevent="this.priseForm = 'Бесплатная'">
                                        <p>БЕСПЛАТНО</p>
                                        <img src="/public/admin/image/slippers.png">
                                        <p v-if="this.priseForm == 'Бесплатная'">
                                            <img  src="/public/admin/image/verification.png">
                                        </p>
                                    </a>

                                </div>
                                <div class="col-lg-4">
                                    <a href="#"  @click.prevent="this.priseForm = 'Платная'">
                                        <p>ПЛАТНО</p>
                                        <img src="/public/admin/image/price.png">
                                        <p v-if="this.priseForm == 'Платная'">
                                            <img  src="/public/admin/image/verification.png">
                                        </p>
                                    </a>

                                </div>


                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="#" class="btn btn-success m-6">ОПРАВИТЬ</a>
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Метрика
                            </th>
                            <th>
                                Заголовок
                            </th>
                            <th>
                                Теги
                            </th>
                            <th>
                                Доступ
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="metric in allMetrics">
                            <td class="py-1 img-table">
                                <a :href="'/'+ metric.url" target="_blank"> <img :src="'/public/storage/thumbnail/thumbnail-'+ metric.photo" alt="image"></a>
                            </td>
                            <td>
                                {{metric.title}}
                            </td>
                            <td>
                                <p v-for="tags_metric in metric.tags">
                                    <a :href="'/tag/'+tags_metric.url">{{tags_metric.title}}</a>
                                </p>
                            </td>


                            <td>
                               {{metric.prise}}
                            </td>
                            <td>
                                <a href="#" class="btn btn-dark m-2">Править</a>
                                <a href="#" class="btn btn-danger m-2">Удалить</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "AdminMetricComponent",
        data(){
            return{
                allMetrics: null,
                directiveImg:null,
                editorConfig: {
                    language:'ru',
                },
                editorData: "",
                titleForm:"",
                descriptionForm:"",
                imagesForm:"",
                priseForm:"Бесплатная",
                hidenForm: false,
                successImg:null,
                activeImg: null,
                addimg:null,
            }
        },

        mounted() {
            this.getMetrics()
            this.getDirective()

            },
        methods:{
          getMetrics(){
              axios.get('/api/adm_panel/metrics_admin').then(res=>{
                  this.allMetrics = res.data
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка выгрузки. Посторите консоль')
              })
          },getDirective(){
              axios.get('/api/adm_panel/metrics_admin/directive').then(res=>{
                  this.directiveImg = res.data
              }).catch(function (error) {
                  console.log(error)
                  alert('Папка пуста или ошибка соединения. Обратитесь в консоль')
              })
          },
            addImages(){
                const formData = new FormData()
                formData.append('image',this.$refs.addImg.files[0])
              axios.post('/api/adm_panel/metrics_admin/add-image',formData,{
                  headers:{
                      'Content-Type':'multipart/form-data'
                  }
              }).then(res=>{
                  this.addimg = res.data
                  this.getDirective()
                  alert('Картинка успешно загружена')

              }).catch(function (error) {
                  console.log(error)
                  alert('Изображение не было загружено')
              })
          },
            deleteImage(image){
                axios.get('/api/adm_panel/metrics_admin/delete-image/'+ image,{image:image}).then(res=>{
                    this.getDirective()
                    console.log('Удалил')
                }).catch(function (error) {
                    console.log(error)
                    alert('Произошла ошибка выгрузки. Посторите консоль')
                })
            },
            successImage(img){
              this.successImg = img
                this.activeImg = img
            },



        },

    }
</script>

<style scoped>

</style>
