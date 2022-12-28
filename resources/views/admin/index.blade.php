@section('title','Панель управления сайтом. Админская')
@include('admin.layout.header')
@include('admin.layout.footer')
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
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-circle-outline menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Form elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/mdi.html">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Icons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="documentation/documentation.html">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
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
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Recent Purchases</p>
                                <div class="table-responsive">
                                    <table id="recent-purchases-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status report</th>
                                            <th>Office</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Gross amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Jeremy Ortega</td>
                                            <td>Levelled up</td>
                                            <td>Catalinaborough</td>
                                            <td>$790</td>
                                            <td>06 Jan 2018</td>
                                            <td>$2274253</td>
                                        </tr>
                                        <tr>
                                            <td>Alvin Fisher</td>
                                            <td>Ui design completed</td>
                                            <td>East Mayra</td>
                                            <td>$23230</td>
                                            <td>18 Jul 2018</td>
                                            <td>$83127</td>
                                        </tr>
                                        <tr>
                                            <td>Emily Cunningham</td>
                                            <td>support</td>
                                            <td>Makennaton</td>
                                            <td>$939</td>
                                            <td>16 Jul 2018</td>
                                            <td>$29177</td>
                                        </tr>
                                        <tr>
                                            <td>Minnie Farmer</td>
                                            <td>support</td>
                                            <td>Agustinaborough</td>
                                            <td>$30</td>
                                            <td>30 Apr 2018</td>
                                            <td>$44617</td>
                                        </tr>
                                        <tr>
                                            <td>Betty Hunt</td>
                                            <td>Ui design not completed</td>
                                            <td>Lake Sandrafort</td>
                                            <td>$571</td>
                                            <td>25 Jun 2018</td>
                                            <td>$78952</td>
                                        </tr>
                                        <tr>
                                            <td>Myrtie Lambert</td>
                                            <td>Ui design completed</td>
                                            <td>Cassinbury</td>
                                            <td>$36</td>
                                            <td>05 Nov 2018</td>
                                            <td>$36422</td>
                                        </tr>
                                        <tr>
                                            <td>Jacob Kennedy</td>
                                            <td>New project</td>
                                            <td>Cletaborough</td>
                                            <td>$314</td>
                                            <td>12 Jul 2018</td>
                                            <td>$34167</td>
                                        </tr>
                                        <tr>
                                            <td>Ernest Wade</td>
                                            <td>Levelled up</td>
                                            <td>West Fidelmouth</td>
                                            <td>$484</td>
                                            <td>08 Sep 2018</td>
                                            <td>$50862</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Striped Table</h4>
                                <p class="card-description">
                                    Add class <code>.table-striped</code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                User
                                            </th>
                                            <th>
                                                First name
                                            </th>
                                            <th>
                                                Progress
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face1.jpg" alt="image">
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face2.jpg" alt="image">
                                            </td>
                                            <td>
                                                Messsy Adam
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td>
                                                July 1, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face3.jpg" alt="image">
                                            </td>
                                            <td>
                                                John Richards
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td>
                                                Apr 12, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face4.jpg" alt="image">
                                            </td>
                                            <td>
                                                Peter Meggik
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face5.jpg" alt="image">
                                            </td>
                                            <td>
                                                Edward
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td>
                                                May 03, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face6.jpg" alt="image">
                                            </td>
                                            <td>
                                                John Doe
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 123.21
                                            </td>
                                            <td>
                                                April 05, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face7.jpg" alt="image">
                                            </td>
                                            <td>
                                                Henry Tom
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 150.00
                                            </td>
                                            <td>
                                                June 16, 2015
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
<script src="{{asset('Cabinet/js/vendor.bundle.base.js')}}"></script>

<!-- plugins:js -->
@vite([
'resources/js/app.js',
'resources/js/cabinet/chart.js',
'resources/js/cabinet/Chart.min.js',
'resources/js/cabinet/jquery.dataTables.js',
'resources/js/cabinet/dataTables.bootstrap4.js',
'resources/js/cabinet/off-canvas.js',
'resources/js/cabinet/hoverable-collapse.js',
'resources/js/cabinet/template.js',
])
</body>

</html>

