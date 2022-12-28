@section('head')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    @vite(['resources/css/cabinet/mdi/css/materialdesignicons.min.css', 'resources/css/cabinet/base/vendor.bundle.base.css', 'resources/css/cabinet/datatables.net-bs4/dataTables.bootstrap4.css', 'resources/css/cabinet/style.css',])

    <link rel="shortcut icon" href="images/favicon.png" />
@endsection
