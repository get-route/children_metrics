<template>
    <div class="col-lg-6 text-center">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" v-model="name">
                <div id="textHelp" class="form-text">Имя будет использовано в Вашем личном кабинете на сайте.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*используется при входе и подтверждении аккаунта">
                <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input v-model="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="*минимум 10 знаков с буквами">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Подтверждение пароля</label>
                <input type="password" v-model="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="*укажите ранее заданный пароль">
            </div>
            <div class="mb-3 form-check">
                <input checked type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">*"Нажимая кнопку Регистрации, Вы соглашаетесь с обработкой Ваших персональных данных (Имени и адреса электронной почты)"</label>
            </div>
            <button type="submit" class="btn btn-primary" @click.prevent="NewUser(this.name,this.password,this.email, this.password_confirmation)">Регистрация</button>
            <a href="./authentication" class="btn btn-facebook m-4">Войти</a>

        </form>
    </div>
    <div class="col-lg-3">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner img-carusel">
                <div class="carousel-item active ">
                    <img src="/public/Frontend/img/metrica/slide2.jpg" class="d-block" alt="пример метрики слайд">
                </div>
                <div class="carousel-item">
                    <img src="/public/Frontend/img/metrica/slide3.jpg" class="d-block " alt="пример метрики слайд">
                </div>
                <div class="carousel-item">
                    <img src="/public/Frontend/img/metrica/slide1.jpg" class="d-block " alt="пример метрики слайд">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Register",
        data(){
            return{
                register:null,
                name:null,
                email:null,
                password:null,
                password_confirmation:null,
            }
        },
        methods:{
            NewUser(name, password, email, password_confirmation){
                axios.post('/api/register',{name:name,password:password,email:email,password_confirmation:password_confirmation}).then(res=>{
                    this.register = res.data
                    this.name = null,
                    this.email = null,
                    this.password = null,
                    this.password_confirmation = null,
                    alert('Вы успешно зарегистрировались.')
                    //console.log(this.register)
                }).catch(function (error) {
                    console.log(error)
                    alert('Ошибка при регистрации. Проверьте правильно ввода пароля и адреса электронной почты')
                })
            }
        }
    }
</script>

<style scoped>
.img-carusel img{
    width: 100%;
    height: auto;
}
</style>
