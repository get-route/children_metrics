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
    @yield('menu')
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
    <section>
        <div class="container">
            <div class="row" id="app">
               <Redactor-Index
                   startimg="{{$metrika[0]->photo}}"
                   userid="{{\Illuminate\Support\Facades\Auth::user()->id}}"
                   urlmetric="{{$metrika[0]->url}}"
               >
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="{{asset('storage/thumbnail/thumbnail-')}}{{$metrika[0]->photo}}">
                </div>
                <div class="col-lg-8">
                    {!!$metrika[0]->text!!}
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
