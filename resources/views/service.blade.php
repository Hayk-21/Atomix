@extends('app.layouts.app')

@section('title','Servicess')

@section('content')
    <section class="my_Servicess_sec">
        <div class="container my_Servicess_container" style="">
            <div class="row my_Servicess_row">
                <div class="col-4 first_img_row">
                    <img src="{{asset('assets/src/img/services/Investments_1.png')}}" alt="" class="first_img img_fon">
                </div>
                <div class="col-2 second_row">
                    <img src="{{asset('assets/src/img/services/polygon.png')}}" alt="" class="second_img">

                    <div class="second_text_div">
                        <p class="second_text">
                            investments
                        </p>
                    </div>
                </div>
                <div class="col-1 third_row">
                    <img src="{{asset('assets/src/img/services/Vector%20(1).svg')}}" alt="" class="third_row_vector">
                </div>
                <div class="col-5 fourth_row">
                    <div class="fourth_text-div">
                        <p class="fourth_text">
                            Passive income for everyone: 20 profitable investment programs
                        </p>
                    </div>
                    <div class="fourth_button_div">
                        <a href="{{route('service')}}">
                            <button class="fourth_button" >
                                Learn more
                            </button>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row my_Servicess_row">
                <div class="col-4 first_img_row">
                    <img src="{{asset('assets/src/img/services/Mask_Group%20(4).png')}}" alt="" class="first_img">
                </div>
                <div class="col-2 second_row">
                    <img src="{{asset('assets/src/img/services/polygon.png')}}" alt="" class="second_img">

                    <div class="second_text_div_br">
                        <p class="second_text">
                            My<br> House
                        </p>
                    </div>
                </div>
                <div class="col-1 third_row">
                    <img src="{{asset('assets/src/img/services/Vector%20(1).svg')}}" alt="" class="third_row_vector">
                </div>
                <div class="col-5 fourth_row">
                    <div class="fourth_text-div">
                        <p class="fourth_text">
                            Take advantage of the alternative and save up to 65% of the property value
                        </p>
                    </div>
                    <div class="fourth_button_div">
                        <a href="{{route('service')}}">
                            <button class="fourth_button">
                                Learn more
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row my_Servicess_row">
                <div class="col-4 first_img_row">
                    <img src="{{asset('assets/src/img/services/Mask_Group%20(1).png')}}" alt="" class="first_img img_fon">
                </div>
                <div class="col-2 second_row">
                    <img src="{{asset('assets/src/img/services/polygon.png')}}" alt="" class="second_img">

                    <div class="second_text_div_br">
                        <p class="second_text">
                            No<br>Credit
                        </p>
                    </div>
                </div>
                <div class="col-1 third_row">
                    <img src="{{asset('assets/src/img/services/Vector%20(1).svg')}}" alt="" class="third_row_vector">
                </div>
                <div class="col-5 fourth_row">
                    <div class="fourth_text-div">
                        <p class="fourth_text">
                            Forget about bank debts! An investment plan for quickly closing a loan at a reduced rate
                        </p>
                    </div>
                    <div class="fourth_button_div">
                        <a href="{{route('service')}}">
                            <button class="fourth_button">
                                Learn more
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row my_Servicess_row">
                <div class="col-4 first_img_row">
                    <img src="{{asset('assets/src/img/services/car.png')}}" alt="" class="first_img img_fon">
                </div>
                <div class="col-2 second_row">
                    <img src="{{asset('assets/src/img/services/polygon.png')}}" alt="" class="second_img">

                    <div class="second_text_div_br">
                        <p class="second_text">
                            Car<br>Drive
                        </p>
                    </div>
                </div>
                <div class="col-1 third_row">
                    <img src="{{asset('assets/src/img/services/Vector%20(1).svg')}}" alt="" class="third_row_vector">
                </div>
                <div class="col-5 fourth_row">
                    <div class="fourth_text-div">
                        <p class="fourth_text">
                            A dream car with a minimum condition: earn money with the help of investments
                        </p>
                    </div>
                    <div class="fourth_button_div">
                        <a href="{{route('service')}}">
                            <button class="fourth_button">
                                Learn more
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row my_Servicess_row">
                <div class="col-4 first_img_row">
                    <img src="{{asset('assets/src/img/services/Mask%20Group%20(2).png')}}" alt="" class="first_img img_fon">
                </div>
                <div class="col-2 second_row">
                    <img src="{{asset('assets/src/img/services/polygon.png')}}" alt="" class="second_img">

                    <div class="second_text_div">
                        <p class="second_text">
                            Lifestyle
                        </p>
                    </div>
                </div>
                <div class="col-1 third_row">
                    <img src="{{asset('assets/src/img/services/Vector%20(1).svg')}}" alt="" class="third_row_vector">
                </div>
                <div class="col-5 fourth_row">
                    <div class="fourth_text-div">
                        <p class="fourth_text">
                            Dream wedding? Expensive gifts? Save on purchases with the Lifestyle program
                        </p>
                    </div>
                    <div class="fourth_button_div">
                        <a href="{{route('service')}}">
                            <button class="fourth_button">
                                Learn more
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row my_Servicess_row">
                <div class="col-4 first_img_row">
                    <img src="{{asset('assets/src/img/services/Mask%20Group%20(3).png')}}" alt="" class="first_img img_fon">
                </div>
                <div class="col-2 second_row">
                    <img src="{{asset('assets/src/img/services/polygon.png')}}" alt="" class="second_img">

                    <div class="second_text_div">
                        <p class="second_text">
                            Electronics
                        </p>
                    </div>
                </div>
                <div class="col-1 third_row">
                    <img src="{{asset('assets/src/img/services/Vector%20(1).svg')}}" alt="" class="third_row_vector">
                </div>
                <div class="col-5 fourth_row">
                    <div class="fourth_text-div">
                        <p class="fourth_text">
                            Buy any equipment for 35% of the cost after 148 days of waiting
                        </p>
                    </div>
                    <div class="fourth_button_div">
                        <a href="{{route('service')}}">
                            <button class="fourth_button">
                                Learn more
                            </button>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
