@section('title','Панель управления сайтом. Админская')
@include('admin.layout.header')
@include('admin.layout.footer')
@include('admin.layout.sidebar')
@include('admin.layout.scripts')
    <!DOCTYPE html>
<html lang="en">

<head>
    @yield('head')

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{route('index')}}"><img src="{{asset('Frontend/img/logo.png')}}" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
    </nav>    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
    @yield('sidebar')
    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body dashboard-tabs p-0">

                                <div class="tab-content py-0 px-0">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">
                                            <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Дата регистрации</small>
                                                    <div class="dropdown">

                                                        <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Доступ</small>
                                                    <h5 class="mr-2 mb-0">Базовый</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Скачано</small>
                                                    <h5 class="mr-2 mb-0">33</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Сформировано</small>
                                                    <h5 class="mr-2 mb-0">2233783</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Сводная таблица</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Метрика
                                            </th>
                                            <th>
                                                Название
                                            </th>
                                            <th>
                                                Цена
                                            </th>
                                            <th>
                                                Дата
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="py-1 img-table">
                                                <img src="{{asset('Frontend\img\metrica\metrika.jpg')}}" alt="image">
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-dark m-2">Скачать</a>
                                                <a href="#" class="btn btn-danger m-2">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="{{asset('Frontend\img\metrica\metrika2.jpg')}}" alt="image">
                                            </td>
                                            <td>
                                                Messsy Adam
                                            </td>

                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                July 1, 2015
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-dark m-2">Скачать</a>
                                                <a href="#" class="btn btn-danger m-2">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="{{asset('Frontend\img\metrica\metrika3.jpg')}}" alt="image">
                                            </td>
                                            <td>
                                                John Richards
                                            </td>

                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                Apr 12, 2015
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-dark m-2">Скачать</a>
                                                <a href="#" class="btn btn-danger m-2">Удалить</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                @yield('footer')
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@yield('scripts')

<!-- plugins:js -->

</body>

</html>


