@extends('app.layouts.app')

@section('title','Index')

@section('content')
    <div class="content">
        <div class="main">
            <div class="left" style="background: url('{{asset('assets/src/img/index/left.webp')}}')">
                <section class="services-slider">
                    <div class="main-container">
                        <div class="slider slider-main">
                            <div class="slide-box">
                                <a href="{{route('service')}}">
                                    <img src="{{asset('assets/src/img/index/slider1.png')}}">
                                </a>
                            </div>
                            <div class="slide-box">
                                <a href="{{route('service')}}">
                                    <img src="{{asset('assets/src/img/index/slider2.png')}}">
                                </a>
                            </div>
                            <div class="slide-box">
                                <a href="{{route('service')}}">
                                    <img src="{{asset('assets/src/img/index/slider3.png')}}">
                                </a>
                            </div>
                            <div class="slide-box">
                                <a href="{{route('service')}}">
                                    <img src="{{asset('assets/src/img/index/slider4.png')}}">
                                </a>
                            </div>
                            <div class="slide-box">
                                <a href="{{route('service')}}">
                                    <img src="{{asset('assets/src/img/index/slider5.png')}}">
                                </a>
                            </div>
                            <div class="slide-box">
                                <a href="{{route('service')}}">
                                    <img src="{{asset('assets/src/img/index/slider6.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-container">
                        <div class="slider-nav">
                            <div>
                                <img src="{{asset('assets/src/img/index/slider1.png')}}">
                            </div>
                            <div>
                                <img src="{{asset('assets/src/img/index/slider2.png')}}">
                            </div>
                            <div>
                                <img src="{{asset('assets/src/img/index/slider3.png')}}">
                            </div>
                            <div>
                                <img src="{{asset('assets/src/img/index/slider4.png')}}">
                            </div>
                            <div>
                                <img src="{{asset('assets/src/img/index/slider5.png')}}">
                            </div>
                            <div>
                                <img src="{{asset('assets/src/img/index/slider6.png')}}">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="right" style="background: url('{{asset('assets/src/img/index/right.webp')}}')"></div>
        </div>
        <!-- <div id="wrapper"></div> -->
    </div>
@endsection
