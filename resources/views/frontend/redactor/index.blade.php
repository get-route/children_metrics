@section('title','Страница генератора метрик')
@section('description','Описание для страницы генератора метрик')
@include('frontend.layout.head')
@include('frontend.layout.menu')
@include('frontend.layout.footer')
    <!DOCTYPE html>
<html lang="en-US" dir="ltr">


@yield('head')
<link rel="stylesheet" href="https://unpkg.com/huebee@2/dist/huebee.min.css">
<script src="https://unpkg.com/huebee@2/dist/huebee.pkgd.min.js"></script>
<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<main class="main" id="top">
    @yield('menu')
        <section style="padding-top: 7rem;" id="app">
            <div class="container">

                    <Redactor-Index></Redactor-Index>
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

