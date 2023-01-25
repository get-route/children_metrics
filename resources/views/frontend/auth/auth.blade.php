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

        <div class="container" >
            <div class="row" id="app">
                <Auth></Auth>
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

