@extends('layouts.layout')

@section('custom_css')

    <link rel="stylesheet" href="{{asset('assets/css/service.css')}}">

@endsection

@section('content')

    @include('pages.service_sidebar')

    <ul class="l-main-content main-content">

        <!-- start intro-section -->
        <li class="l-section section section--is-active">
            <div class="intro">
                <div class="intro--banner">
                    <h1>{{$service->title}}</h1>
                    <img class="hero_image" src="{{$service->getImagePath('inner_image')}}" alt="hero_image">
                </div>
                <div class="intro--options">
                    @foreach($descriptions as $description)
                        <div>
                            <h2>{{$description['content']}}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </li>
        <!-- end intro-section -->


        <!-- start intro-section -->
        <li class="l-section section">
            <div class="cards">

                <div id="service-site" class="owl-carousel">
                    @foreach($tariffs as $tariff)
                        <div class="service_site_card">
                            <div class="frontend_site">
                                <h4 class="site_name_service">{{$tariff->title}}</h4>
                                <p class="site_description">
                                    {{$tariff->content}}
                                </p>
                            </div>
                            <a href="#" class="watch_more">
                                <button class="colorful-button secondary">
                                    <div class="wrapper">
                                        <span>Цена {{$tariff->price}}сум</span>
                                    </div>
                                </button>
                            </a>
                        </div>
                    @endforeach


                </div>

            </div>
        </li>
        <!-- end intro-section -->


        <!-- start hire-section -->
        <li class="l-section section" id="order">

            <!-- backgroun -->
            <div class="background_shapes_services">

                <div class="polygon">
                    <img src="{{asset('assets/img/background_shapes/polygon.png')}}" alt="">
                </div>

                <div class="polygon_1">
                    <img src="{{asset('assets/img/background_shapes/polygon_1.png')}}" alt="">
                </div>

                <div class="polygon_2">
                    <img src="{{asset('assets/img/background_shapes/polygon_2.png')}}" alt="">
                </div>

                <div class="cube_1">
                    <img src="{{asset('assets/img/background_shapes/cube_6.png')}}" alt="">
                </div>

                <div class="cube_2">
                    <img src="{{asset('assets/img/background_shapes/cube_5.png')}}" alt="">
                </div>

                <div class="triangle_1">
                    <img src="{{asset('assets/img/background_shapes/triangle_1.png')}}" alt="">
                </div>

                <div class="triangle_2">
                    <img src="{{asset('assets/img/background_shapes/triangle_2.png')}}" alt="">
                </div>

                <div class="ball_3">
                    <img src="{{asset('assets/img/background_shapes/ball_1.png')}}" alt="">
                </div>

                <div class="ball_1">
                    <img src="{{asset('assets/img/background_shapes/ball_5.png')}}" alt="">
                </div>

            </div>
            <!-- background -->

            <div class="hire">

                <h2>Оставьте заявку и мы свяжемся с вами</h2>
                {!! Form::open([
                    'route'=>['send.form.tariffs', $service->id],
                    'class' => 'work-request'
                ]) !!}
{{--                <form class="work-request">--}}
                    <div class="work-request--options">
                        @foreach($tariffs as $tariff)
                            <input id="opt-{{$loop->iteration}}" name="opt[]" type="checkbox" value="{{$tariff->id}}">
                            <label for="opt-{{$loop->iteration}}">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                             style="enable-background:new 0 0 150 111;" xml:space="preserve">
                          <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path
                                d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                          </g>
                        </svg>
                                {{$tariff->title}}
                      </label>
                        @endforeach
                    </div>
                    <div class="work-request--information">
                        <div class="information-name">
                            <input id="name" type="text" spellcheck="false" name="name">
                            <label for="name">имя</label>
                            @error('name')
                            <div class="alert alert-danger"><p style="font-size: 15px;">{{ 'Обязательно введите имя' }}</p></div>
                            @enderror
                        </div>
                        <div class="information-email">
                            <input id="email" type="email" spellcheck="false" name="email">
                            <label for="email">e-mail</label>
                            @error('email')
                            <div class="alert alert-danger"><p style="font-size: 15px;">{{ 'Обязательно введите номер' }}</p></div>
                            @enderror
                        </div>
                    </div>
                    <input class="noselect" type="submit" value="Отправить запрос">
{{--                </form>--}}
                {{Form::close()}}

            </div>
        </li>
        <!-- end hire-section -->


        <!-- start services-section -->
        <li class="l-section section">

            <!-- background that works badly, for outer-nav -->
            <div class="background_shapes">
                <div class="circle-1">
                    <img src="{{asset('assets/img/background_shapes/circle.png')}} " alt="">
                </div>
                <div class="circle-1-1">
                    <img src="{{asset('assets/img/background_shapes/circle_1.png')}}" alt="">
                </div>
                <div class="circle-2">
                    <img src="{{asset('assets/img/background_shapes/circle_2.png')}}" alt="">
                </div>
                <div class="circle-2-2">
                    <img src="{{asset('assets/img/background_shapes/circle_1.png')}}" alt="">
                </div>
                <div class="circle-3">
                    <img src="{{asset('assets/img/background_shapes/circle_2.png')}}" alt="">
                </div>
                <div class="circle-3-3">
                    <img src="{{asset('assets/img/background_shapes/circle.png')}}" alt="">
                </div>
                <div class="triangle-1">
                    <img src="{{asset('assets/img/background_shapes/tri_1.png')}}" alt="">
                </div>
                <div class="triangle-1-1">
                    <img src="{{asset('assets/img/background_shapes/tri_2.png')}}" alt="">
                </div>
                <div class="triangle-2">
                    <img src="{{asset('assets/img/background_shapes/tri_1.png')}}" alt="">
                </div>
                <div class="triangle-2-2">
                    <img src="{{asset('assets/img/background_shapes/tri_3.png')}}" alt="">
                </div>
                <div class="triangle-3">
                    <img src="{{asset('assets/img/background_shapes/tri_3.png')}}" alt="">
                </div>
                <div class="triangle-3-3">
                    <img src="{{asset('assets/img/background_shapes/tri_2.png')}}" alt="">
                </div>
                <div class="triangle-4">
                    <img src="{{asset('assets/img/background_shapes/tri_1.png')}}" alt="">
                </div>
                <div class="triangle-4-4">
                    <img src="{{asset('assets/img/background_shapes/tri_3.png')}}" alt="">
                </div>
            </div>
            <!-- background -->

            <div class="work">
                <h2>Другие услуги</h2>

                <div class="work--lockup">
                    <!-- carousel -->
                    <div class="services-slideshow owl-carousel">

                        @foreach($services as $service)

                            <div class="item">
                                <a href="{{route('service.show', $service->slug)}}">
                                    <div class="service-image">
                                        <img src="{{$service->getImagePath('image')}}" alt="">
                                    </div>
                                    <div class="service-text">
                                        <h3 class="service-title">{{$service->title}}</h3>
                                        <div class="service-description">
                                            <p>{{$service->title_description}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>
                    <!-- carousel -->
                </div>
            </div>
        </li>
        <!-- end services-section -->

    </ul>


@endsection

@section('custom_js')

    <script src="{{asset('assets/js/service.js')}}"></script>

@endsection
