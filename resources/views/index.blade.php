@section('title','Генератор метрик для новорожденных онлайн')
@section('description','Описание для страницы генератора')
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

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
                                                                                src="{{asset('Frontend/img/hero/hero-img.png')}} "
                                                                                alt="hero-header"/></div>
                <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                    <h4 class="fw-bold text-danger mb-3">Лучшие метрики на все события...</h4>
                    <h1 class="hero-title">Оригинальные метрики для ребенка онлайн</h1>
                    <p class="mb-4 fw-medium">Сделайте премиальную метрику для своего ребенка.<br
                            class="d-none d-xl-block"/>У нас множество дизайнов и шаблонов, в том числе и бесплатных<br
                            class="d-none d-xl-block"/>запечатлите момент рождения и любого события онлайн...</p>
                    <div class="text-center text-md-start"><a
                            class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!"
                            role="button">Открыть редактор</a>
                        <div class="w-100 d-block d-md-none"></div>
                        <a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span
                                class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img
                                    src="{{asset('Frontend/img/hero/play.svg')}} " width="15"
                                    alt="paly"/></span></a><span class="fw-medium">Инструкция</span>
                        <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pt-md-9" id="service">

        <div class="container">
            <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img
                    src="{{asset('Frontend/img/category/shape.svg')}} " style="max-width: 200px" alt="service"/></div>
            <div class="mb-7 text-center">
                <h5 class="text-secondary">Немного про сервис </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Какие метрики может делать сервис?</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"><img src="{{asset('Frontend/img/category/icon1.png')}} "
                                                                width="75" alt="Service"/>
                            <h4 class="mb-3">Метрики для новорожденных</h4>
                            <p class="mb-0 fw-medium">Новорожденным малышам с указанием роста,веса, родителей и т.д.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"><img src="{{asset('Frontend/img/category/icon2.png')}} "
                                                                width="75" alt="Service"/>
                            <h4 class="mb-3">Метрики на дни рождения</h4>
                            <p class="mb-0 fw-medium">Девочкам и Мальчикам, на любую дату. Запечатлите важный момент ребенка.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"><img src="{{asset('Frontend/img/category/icon3.png')}} "
                                                                width="75" alt="Service"/>
                            <h4 class="mb-3">По торжественному случаю</h4>
                            <p class="mb-0 fw-medium">Создайте оригинальную открытку, которую не купишь в магазине.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="destination">

        <div class="container">
            <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                    src="{{asset('Frontend/img/dest/shape.svg')}} " alt="destination"/></div>
            <div class="mb-7 text-center">
                <h5 class="text-secondary">Метрики месяца </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Самые трендовые метрики месяца</h3>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"><img class="card-img-top"
                                                                  src="{{asset('Frontend/img/dest/dest1.jpg')}} "
                                                                  alt="Rome, Italty"/>
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                        class="link-900 text-decoration-none stretched-link" href="#!">Черная рамка</a>
                                </h4><span class="fs-1 fw-medium">Р99 РУБ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"><img class="card-img-top"
                                                                  src="{{asset('Frontend/img/dest/dest2.jpg')}} "
                                                                  alt="London, UK"/>
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                        class="link-900 text-decoration-none stretched-link" href="#!">Светлая рамка</a>
                                </h4><span class="fs-1 fw-medium">99 РУБ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"><img class="card-img-top"
                                                                  src="{{asset('Frontend/img/dest/dest3.jpg')}} "
                                                                  alt="Full Europe"/>
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                        class="link-900 text-decoration-none stretched-link" href="#!">Светлая рамка</a>
                                </h4><span class="fs-1 fw-medium">99 РУБ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="booking">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-4 text-start">
                        <h5 class="text-secondary">Сделай свою Метрику </h5>
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Создайте уникальную метрику за 3 шага</h3>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"><img
                                src="{{asset('Frontend/img/steps/selection.svg')}}" width="22" alt="steps"/></div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Откройте редактор</h5>
                            <p>Просто выбирайте интересующий Вас элмент метрики по шагам <br class="d-none d-sm-block"> или приобретите уже готовый премиум вариант.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"><img
                                src="{{asset('Frontend/img/steps/water-sport.svg')}} " width="22" alt="steps"/></div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Подтвердите сохранение</h5>
                            <p>Заполните необходимые поля в редакторе и <br class="d-none d-sm-block"> оплатите шаблон после сохранения.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"><img
                                src="{{asset('Frontend/img/steps/taxi.svg')}} " width="22" alt="steps"/></div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Скачате шаблон и распечатайте</h5>
                            <p>Получите итоговый вариант документа <br class="d-none d-sm-block"> и распечатайте его в удобном для Вас варианте.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-start">
                    <div class="card position-relative shadow" style="max-width: 370px;">
                        <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"><img
                                src="{{asset('Frontend/img/steps/bg.png')}} " style="max-width:550px;" alt="shape"/>
                        </div>
                        <div class="card-body p-3"><img class="mb-4 mt-2 rounded-2 w-100"
                                                        src="{{asset('Frontend/img/steps/booking-img.jpg')}} "
                                                        alt="booking"/>
                            <div>
                                <h5 class="fw-medium">Trip To Greece</h5>
                                <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                                <div class="icon-group mb-4"><span class="btn icon-item"> <img
                                            src="{{asset('Frontend/img/steps/leaf.svg')}} " alt=""/></span><span
                                        class="btn icon-item"> <img src="{{asset('Frontend/img/steps/map.svg')}} "
                                                                    alt=""/></span><span class="btn icon-item"> <img
                                            src="{{asset('Frontend/img/steps/send.svg')}} " alt=""/></span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mt-n1"><img class="me-3"
                                                                                      src="{{asset('Frontend/img/steps/building.svg')}} "
                                                                                      width="18" alt="building"/><span
                                            class="fs--1 fw-medium">24 people going</span></div>
                                    <div class="show-onhover position-relative">
                                        <div
                                            class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                                            style="width: 260px;border-radius:18px;">
                                            <div class="card-body py-3">
                                                <div class="d-flex">
                                                    <div style="margin-right: 10px"><img class="rounded-circle"
                                                                                         src="{{asset('Frontend/img/steps/favorite-placeholder.png')}} "
                                                                                         width="50" alt="favorite"/>
                                                    </div>
                                                    <div>
                                                        <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                                        <h5 class="fw-medium mb-3">Trip to rome</h5>
                                                        <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed</h6>
                                                        <div class="progress" style="height: 6px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 40%;" aria-valuenow="25"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn"><img src="{{asset('Frontend/img/steps/heart.svg')}} "
                                                                 width="20" alt="step"/></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="testimonial">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-8 text-start">
                        <h5 class="text-secondary">Отзывы </h5>
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Что клиенты говорят о нас</h3>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="pe-7 ps-5 ps-lg-0">
                        <div class="carousel slide carousel-fade position-static" id="testimonialIndicator"
                             data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item position-relative active">
                                    <div class="card shadow" style="border-radius:10px;">
                                        <div class="position-absolute start-0 top-0 translate-middle"><img
                                                class="rounded-circle fit-cover"
                                                src="{{asset('Frontend/img/testimonial/author.png')}} " height="65"
                                                width="65" alt=""/></div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">&quot;Удобный сервис. Долго искала как мне сделать свою, не шаблонную метрику для ребенка. В итоге у нас некоторые за это больше 1т просят. У Вас я за 99 рублей все сама сделала.&quot;</p>
                                            <h5 class="text-secondary">Юлия Васнецова</h5>
                                            <p class="fw-medium fs--1 mb-0">Россия, Омск</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                         style="border-radius:10px;transform:translate(25px, 25px)"></div>
                                </div>
                                <div class="carousel-item position-relative ">
                                    <div class="card shadow" style="border-radius:10px;">
                                        <div class="position-absolute start-0 top-0 translate-middle"><img
                                                class="rounded-circle fit-cover"
                                                src="{{asset('Frontend/img/testimonial/author2.png')}} " height="65"
                                                width="65" alt=""/></div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">&quot;Спасибо, Вы классные. Я не стала заморачиваться и скачала уже готовый премиум вариант. Все идеально подошло. Сейчас в рамочку поставила и любуемся с мужем.&quot;</p>
                                            <h5 class="text-secondary">Анна Виткова</h5>
                                            <p class="fw-medium fs--1 mb-0">Россия, Пермь</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                         style="border-radius:10px;transform:translate(25px, 25px)"></div>
                                </div>
                                <div class="carousel-item position-relative ">
                                    <div class="card shadow" style="border-radius:10px;">
                                        <div class="position-absolute start-0 top-0 translate-middle"><img
                                                class="rounded-circle fit-cover"
                                                src="{{asset('Frontend/img/testimonial/author3.png')}} " height="65"
                                                width="65" alt=""/></div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">&quot;Думаю альтернативы Вашему сервису пока нет. Спасибо, очень удобно, а главное по карману. Некоторые частники у нас за это под 2 000 просят, я была удивлена, когда в ВК увидела Вас.&quot;</p>
                                            <h5 class="text-secondary">Катерина Митина</h5>
                                            <p class="fw-medium fs--1 mb-0">Россия, Рязань</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                         style="border-radius:10px;transform:translate(25px, 25px)"></div>
                                </div>
                            </div>
                            <div
                                class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                                style="height:60px;width:20px;">
                                <button class="carousel-control-prev position-static" type="button"
                                        data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img
                                        src="{{asset('Frontend/img/icons/up.svg')}} " width="16" alt="icon"/></button>
                                <button class="carousel-control-next position-static" type="button"
                                        data-bs-target="#testimonialIndicator" data-bs-slide="next"><img
                                        src="{{asset('Frontend/img/icons/down.svg')}} " width="16" alt="icon"/></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>

    <section class="pt-6">

        <div class="container">
            <div class="py-8 px-5 position-relative text-center"
                 style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
                <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"><img
                        src="{{asset('Frontend/img/cta/send.png')}} " style="max-width:70px;" alt="send icon"/></div>
                <div class="position-absolute end-0 top-0 z-index--1"><img
                        src="{{asset('Frontend/img/cta/shape-bg2.png')}} " width="264" alt="cta shape"/></div>
                <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"><img
                        src="{{asset('Frontend/img/cta/shape-bg1.png')}} " style="max-width: 340px;" alt="cta shape"/>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="text-secondary lh-1-7 mb-7">У нас постоянно проходят акции и розыгрыши. Подпишитесь на нас в соц сетях или по почте, чтобы быть в курсе...</h2>
                        <form class="row g-3 align-items-center w-lg-75 mx-auto">
                            <div class="col-sm">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                           placeholder="Введите email " aria-label="email"/><img class="input-box-icon"
                                                                                               src="{{asset('Frontend/img/cta/mail.svg')}} "
                                                                                               width="17" alt="mail"/>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <button class="btn btn-danger orange-gradient-btn fs--1">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->



</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<!-- ============================================-->
@yield('footer')
</body>

</html>

