<template>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Таблица метрик сайта</h4>

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
                                <a :href="'/'+ metric.url" target="_blank"> <img :src="'\/public\/Frontend\/img\/metrica\/'+ metric.photo" alt="image"></a>
                            </td>
                            <td>
                                {{metric.title}}
                            </td>
                            <td>
                                <p v-for="tags_metric in metric.tags">
                                    <a href="'/tag/'+tags_metric.url">{{tags_metric.title}}</a>
                                </p>
                            </td>


                            <td>
                                3
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
            }
        },
        mounted() {
            this.getMetrics()
            },
        methods:{
          getMetrics(){
              axios.get('/api/adm_panel/metrics_admin').then(res=>{
                  this.allMetrics = res.data
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка выгрузки. Посторите консоль')
              })
          }
        },

    }
</script>

<style scoped>

</style>
