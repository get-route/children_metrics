@section('title',$metrika[0]->title)
@section('description',$metrika[0]->description)
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
    <nav class="navbar navbar-expand-lg navbar-light"
         data-navbar-on-scroll="data-navbar-on-scroll">
        @yield('menu')
    </nav>

    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pre-menu">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row ">
                        <div class="col-lg-1">
                            <img src="{{asset('Frontend/img/metrica/baby-header.png')}}" alt="{{$metrika[0]->h1}}">
                        </div>
                        <div class="col-lg-10 text-center">
                            <h1>{{$metrika[0]->h1}}</h1>
                            <p style="font-size: 14px">{{$metrika[0]->created_at->format('d-m-Y')}} - Просмотров: {{$metrika[0]->views}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                            @foreach($metrika[0]->tags as $metrik_tags)
                                <li class="breadcrumb-item " aria-current="page"><a class="btn btn-facebook" href="{{route('index')}}/{{$metrik_tags->url}}">[#{{$metrik_tags->title}}#]</a> </li>
                            @endforeach
                            <li class="breadcrumb-item active" aria-current="page">{{$metrika[0]->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <!-- end of .container-->

    </section>

    <section class="redactor">
        <div class="container">
            <div class="row" id="app">
                @auth
               <Redactor-Index
                   startimg="{{$metrika[0]->photo}}"
                   userid="{{\Illuminate\Support\Facades\Auth::user()->id}}"
                   urlmetric="{{$metrika[0]->url}}"
               >
                    @endauth
                @guest
                    <div class="text-center col-lg-12">
                        <p>❌</p>
                        <p>*Для показа редактора Метрик, необходимо зарегистрироваться на сайте</p>
                        <a href="{{route('register')}}" class="btn btn-lg btn-success">Зарегистрироваться</a>
                    </div>

                    @endguest
            </div>
        </div>
    </section>
    <section class="text">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Дополнительная информация о метрике</h2>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('storage/thumbnail/thumbnail-')}}{{$metrika[0]->photo}}">
                </div>
                <div class="col-lg-8">
                    {!!$metrika[0]->text!!}
                </div>
            </div>
        </div>
    </section>
    <section class="comments" id="comment">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Комментарии пользователей</h3>

                @foreach($metrika[0]->comments as $coments_metrik)
                    @if($coments_metrik->public == "ДА" && !$coments_metrik->parent_id)
                <div class="col-lg-12 row parent_comment row">
                    <div class="col-lg-3 text-center parent_comment_user">
                        <p>{{$coments_metrik->name}}</p>
                        <p>{{$coments_metrik->updated_at->format('d-m-Y')}}</p>
                    </div>
                    <div class="col-lg-9">
                        <p>{{$coments_metrik->text}}</p>
                        <form-components
                        metricId="{{$metrika[0]->id}}"
                        parentId="Null"
                        authcheck="{{$user}}"
                        >

                    </div>

                </div>
                    @elseif($coments_metrik->public == "ДА" && $coments_metrik->parent_id)
                <div class="row m-2">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-9 child_comment row text-right ">
                        <div class="col-lg-2 text-center child_comment_user">
                            <p>{{$coments_metrik->name}}</p>
                            <p>{{$coments_metrik->updated_at->format('d-m-Y')}}</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{$coments_metrik->text}}</p>
                            <form-components
                                metricid="{{$metrika[0]->id}}"
                                parentid="{{$coments_metrik->parent_id}}"
                                authcheck="{{$user}}"
                            >
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>

    </section>

    <section class="form-comment">
        <div class="container row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                @guest
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Александра">
                </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                </div>
                @endguest

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ваш комментарий</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                </div>
                    <div class="m-3 text-center">
                        <button class="btn-lg btn-success ">Отправить</button>
                    </div>

            </div>
        </div>


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
