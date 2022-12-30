@section('title','Админка для метрик')
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
                                                Заголовок
                                            </th>
                                            <th>
                                                Описание
                                            </th>
                                            <th>
                                                Цена
                                            </th>
                                            <th>
                                                Дата
                                            </th>
                                            <th>
                                                Просмотры
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all_metrics as $metrica)
                                        <tr>
                                            <td class="py-1 img-table">
                                                <a href="{{route('index')}}/{{$metrica->url}}" target="_blank"> <img src="{{asset('Frontend\img\metrica/'.$metrica->photo)}}" alt="image"></a>
                                            </td>
                                            <td>
                                                {{$metrica->title}}
                                            </td>
                                            <td>
                                                {{$metrica->description}}
                                            </td>

                                            <td>
                                                {{$metrica->prise}}
                                            </td>
                                            <td>
                                                {{$metrica->updated_at}}
                                            </td>
                                            <td>
                                               {{$metrica->views}}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-dark m-2">Править</a>
                                                <a href="#" class="btn btn-danger m-2">Удалить</a>
                                            </td>
                                        </tr>
                                        @endforeach
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

