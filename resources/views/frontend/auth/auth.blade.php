@section('title','Форма входа')
@section('description','Форма входа для сайта')
@include('frontend.layout.head')
@include('frontend.layout.menu')
@include('frontend.layout.footer')
    <!DOCTYPE html>
<html lang="en-US" dir="ltr">


@yield('head')

<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<main class="main" id="top">
    @yield('menu')

    <section style="padding-top: 7rem;">

        <!--/.bg-holder-->

        <div class="container row" id="app">

            <div class="col-lg-6 text-center">
                @if(session()->has('error'))
                    <p style="color: red; font-size: 40px">!</p>
                    {{session('error')}}
                @endif
                <form action="{{route('auth.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*используется при входе и подтверждении аккаунта">
                        <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="*указанный при регистрации">
                    </div>
                    <div class="mb-3 form-check">
                        <input checked type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">*"Нажимая кнопку Регистрации, Вы соглашаетесь с обработкой Ваших персональных данных (Имени и адреса электронной почты)"</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <a href="./register" class="btn btn-facebook m-4">Регистрация</a>

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

        </div>
    </section>




</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<!-- ============================================-->
@yield('footer')
</body>

</html>

