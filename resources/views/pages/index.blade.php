@extends('layouts.layout')

@section('content')

    @include('pages.main_sidebar')


    <!-- main-content section -->
    <ul class="l-main-content main-content">

        <!-- start intro-section -->
        <li class="l-section section section--is-active">
            <div class="intro">

                <div class="intro--banner">
                    <div class="c-homeIntro__buzzwords c-buzzwords js_buzzwordsTrigger">
                        <div class="c-buzzwords__line js_lineTrigger">
                            <div style="display: none">{{$i=0}}</div>
                            @foreach($letters as $letter)
                                @if($i == 2)
                                    <pre>

                                    </pre>
                                    <div style="display: none">{{$i=0}}</div>
                                @endif
                                <div class="c-buzzwords__charWrapper js_charTrigger">
                                    <div class="c-buzzwords__char">
                                        @if($letter != " ")
                                            {!! $letter !!}
                                        @else
                                            <pre style="margin: 0">{!! " " !!}</pre>
                                            <div style="display: none">{{$i++}}</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="cta">{{$applicationText}}
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                             xml:space="preserve">
											<g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                                <path
                                                    d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                                            </g>
										</svg>
                        <span class="btn-background"></span>
                    </button>
                    <img src="{{$imagePath}}" alt="Welcome">
                </div>
                <div class="intro--options">
                    <a href="#0">
                        <h3>{{$descriptionTitle}}</h3>
                        <p>{{$descriptionContent}}</p>
                    </a>
                </div>

                <div class="scroll-downs sixth">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>

            </div>
        </li>
        <!-- end intro-section -->


        <!-- start services-section -->
        <li class="l-section section">
            <div class="work">

                <!-- background that works badly, for outer-nav -->
                <div class="background_shapes">
                    <div class="circle-1">
                        <img src="assets/img/background_shapes/circle.png" alt="">
                    </div>
                    <div class="circle-1-1">
                        <img src="assets/img/background_shapes/circle_1.png" alt="">
                    </div>
                    <div class="circle-2">
                        <img src="assets/img/background_shapes/circle_2.png" alt="">
                    </div>
                    <div class="circle-2-2">
                        <img src="assets/img/background_shapes/circle_1.png" alt="">
                    </div>
                    <div class="circle-3">
                        <img src="assets/img/background_shapes/circle_2.png" alt="">
                    </div>
                    <div class="circle-3-3">
                        <img src="assets/img/background_shapes/circle.png" alt="">
                    </div>
                    <div class="triangle triangle-1">
                        <img src="assets/img/background_shapes/tri_1.png" alt="">
                    </div>
                    <div class="triangle triangle-1-1">
                        <img src="assets/img/background_shapes/tri_2.png" alt="">
                    </div>
                    <div class="triangle triangle-2">
                        <img src="assets/img/background_shapes/tri_1.png" alt="">
                    </div>
                    <div class="triangle triangle-2-2">
                        <img src="assets/img/background_shapes/tri_3.png" alt="">
                    </div>
                    <div class="triangle triangle-3">
                        <img src="assets/img/background_shapes/tri_3.png" alt="">
                    </div>
                    <div class="triangle triangle-3-3">
                        <img src="assets/img/background_shapes/tri_2.png" alt="">
                    </div>
                    <div class="triangle triangle-4">
                        <img src="assets/img/background_shapes/tri_1.png" alt="">
                    </div>
                    <div class="triangle triangle-4-4">
                        <img src="assets/img/background_shapes/tri_3.png" alt="">
                    </div>
                </div>
                <!-- background -->

                <h2>Наши услуги</h2>

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


        <!-- start about-section -->
        <li class="l-section section">
            <div class="about">

                <div class="about--banner">
                    <h2>{{$aboutMainTitle}}<span class="point"></span>
                    </h2>
                    <img src="{{$aboutImagePath}}" alt="About Us">
                    <h3>{{$aboutPartnersTitle}}</h3>
                </div>

                <div class="about--options">
                    <div class="portfolio-slideshow owl-carousel">
                        @foreach($partners as $partner)

                        <div class="sigle_item_img">
                            <a class="portfolio-image">
                                <img src="{{$partner->getImagePath('image', 'thumb')}}" alt="">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </li>
        <!-- end about-section -->


        <!-- start hire-section -->
        <li class="l-section section">

            <!-- backgroun -->
            <div class="background_shapes_services">

                <div class="polygon">
                    <img src="assets/img/background_shapes/polygon.png" alt="">
                </div>

                <div class="polygon_1">
                    <img src="assets/img/background_shapes/polygon_1.png" alt="">
                </div>

                <div class="polygon_2">
                    <img src="assets/img/background_shapes/polygon_2.png" alt="">
                </div>

                <div class="cube_1">
                    <img src="assets/img/background_shapes/cube_5.png" alt="">
                </div>

                <div class="cube_2">
                    <img src="assets/img/background_shapes/cube_6.png" alt="">
                </div>

                <div class="triangle_1">
                    <img src="assets/img/background_shapes/triangle_1.png" alt="">
                </div>

                <div class="triangle_2">
                    <img src="assets/img/background_shapes/triangle_2.png" alt="">
                </div>

                <div class="ball_3">
                    <img src="assets/img/background_shapes/ball_3.png" alt="">
                </div>

                <div class="ball_1">
                    <img src="assets/img/background_shapes/ball_1.png" alt="">
                </div>

            </div>
            <!-- background -->

            <div class="hire">

                <h2>{{$contactMainTitle}}</h2>
                {!! Form::open([
                'route'=>['send.form'],
                'class' => 'work-request'
                ]) !!}
{{--                <form class="work-request">--}}
                    <div class="work-request--options">
                        @foreach($services as $service)
                            <input id="opt-{{$loop->iteration}}" name="opt[]" type="checkbox" value="{{$service->id}}">
                            <label for="opt-{{$loop->iteration}}">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                     xml:space="preserve">
													<g
                                                        transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                        <path
                                                            d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                                    </g>
												</svg>
                                {!! $service->title!!}
                            </label>
                        @endforeach

                    </div>
                    <div class="work-request--information">
                        <div class="information-name">
                            <input name="name" id="name" type="text" spellcheck="false" >
                            <label for="name">{{$contactName}}</label>
                            @error('name')
                            <div class="alert alert-danger"><p style="font-size: 15px;">{{ 'Обязательно введите имя' }}</p></div>
                            @enderror
                        </div>
                        <div class="information-number">
                            <input name="number" id="number" type="text" spellcheck="false" value=" ">
                            <label for="number">{{$contactNumber}}</label>
                            @error('number')
                            <div class="alert alert-danger"><p style="font-size: 15px;">{{ 'Обязательно введите номер' }}</p></div>
                            @enderror
                        </div>
                    </div>
                    <input class="noselect" type="submit" value="{{$contactButton}}">
{{--                </form>--}}
                    {{Form::close()}}
            </div>
        </li>
        <!-- end hire-section -->

    </ul>
    <!-- main-content section -->


@endsection
