<template>
    <div class="col-lg-6 text-center">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                <div id="textHelp" class="form-text">Имя будет использовано в Вашем личном кабинете на сайте.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input checked type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">*"Нажимая кнопку Регистрации, Вы соглашаетесь с обработкой Ваших персональных данных (Имени и адреса электронной почты)"</label>
            </div>
            <button type="submit" class="btn btn-primary">Регистрация</button>
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
        name: "Register"
    }
</script>

<style scoped>
.img-carusel img{
    width: 100%;
    height: auto;
}
</style>
