<template>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 text-center" v-if="!openTable">
                    <a href="" @click.prevent="onloadMetrik(userid)" class="btn-dark btn">Показать все созданные метрики</a>
                </div>
                <div class="table-responsive">
                    <table v-if="openTable==true" class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Метрика
                            </th>
                            <th>
                                Размер
                            </th>
                            <th>
                                Формат
                            </th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="ready in this.readyMetrik">
                            <td class="py-1 img-table">
                                <img :src="'/storage/user/'+ userid +'/thumbnail/thumbnail-'+ ready" alt="image">
                            </td>
                            <td>
                                Herman Beck
                            </td>
                            <td>
                                $ 77.99
                            </td>
                            <td>
                                <a href="#" class="btn btn-facebook m-2" @click.prevent="downloadStat(userid, 'download',userid, ready)">Скачать</a>
                                <a href="#" class="btn btn-danger m-2" @click.prevent="deleteImg(userid, ready)">Удалить</a>
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

        name: "TablesComponent",
        props:['userid'],
        data(){
            return{
                readyMetrik:null,
                openTable:false,
            }
        },
        methods:{
            onloadMetrik(authid){
                axios.post('/api/cabinet/index/table',{auth:authid}).then(res=>{
                    //console.log(userid)
                    this.readyMetrik = res.data
                    this.openTable = true
                }).catch(function (error) {
                    alert("Произошла ошибка!. Попробуйте еще раз или обратитесь к администрации сайта.")
                })
            },
            downloadStat(authid, upd_value, pathID, img){
                axios.post('/api/cabinet/index/table/stat',{auth:authid,update:upd_value}).then(res=>{
                    // Download ready images funcrion
                     var tmpLink = document.createElement( 'a' );
                    tmpLink.download = 'my-baby-metrik.jpg'; // set the name of the download file
                     tmpLink.href = '/storage/user/'+ pathID +'/'+img

                     document.body.appendChild( tmpLink );
                    var one = document.body.appendChild( tmpLink );
                     tmpLink.click();
                     document.body.removeChild( tmpLink );
                }).catch(function (error) {
                    alert("Произошла ошибка!. Попробуйте еще раз или обратитесь к администрации сайта.")
                })
            },
            deleteImg(user, image){
                axios.get('/api/cabinet/index/table/delete/'+ user +'/'+image).then(res=>{
                    this.onloadMetrik(user)
                }).catch(function (error) {
                    alert("Произошла ошибка!. Попробуйте еще раз или обратитесь к администрации сайта.")
                })
            },
        }
    }
</script>

<style scoped>

</style>
