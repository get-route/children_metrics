@section('title','Регистрация на сайте')
@section('description','Форма регистрации нового пользователя')
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
@if(session()->has('success'))
    {{session('success')}}
                @endif
                <Register></Register>
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

