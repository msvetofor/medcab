@extends('layout.app')

@section('title', 'Консультации')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="consultations_content_space">
                <div class="consultations">
                    <div class="consultations_menu">
                        <div class="consultations_menu_first">
                            <a href="{{ route('appointmspecialist') }}">
                                <img src="{{ asset('/svg/Appointment.svg') }}" style="padding-right: 5px">
                                Записаться
                            </a>
                            <a href="{{ route('recommendations') }}"><img src="{{ asset('/svg/AppointmentHistory.svg') }}"></a>


                        </div>
                        <span class="consultations_menu_line"></span>
                        <div class="consultations_menu_second">
                            <h3>Активные<br>Консультации</h3>
                            <div class="consultations_position consultations_position_empty">
                                Отсутствуют
                            </div>
                        </div>
                        <span class="consultations_menu_line"></span>
                        <div class="consultations_menu_third">
                            <h3>Запланированные Консультации</h3>
                            <div class="consultations_position consultations_position_planed">
                                <p>Алексей Петрунов</p>
                                <p>Хирург, Терапевт</p>
                                <p>30.12.2023 18:00</p>
                            </div>
                            <div class="consultations_position consultations_position_planed">
                                <p>Алексей Петрунов</p>
                                <p>Хирург, Терапевт</p>
                                <p>30.12.2023 18:00</p>
                            </div>
                            <div class="consultations_position consultations_position_planed">
                                <p>Алексей Петрунов</p>
                                <p>Хирург, Терапевт</p>
                                <p>30.12.2023 18:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="consultations_chat">
                        <h3>Консультация</h3>
                        <img src="{{ asset('/svg/consultationIcon.svg') }}">
                        <div class="consultations_chat_info">
                            <b>Онлайн-консультация с врачами</b>
                            <p>Доступно, удобно, безопасно</p>
                        </div>
                        <div class="consultations_buttons">
                            <a href="{{ route('appointmspecialist') }}">
                                <img src="{{ asset('/svg/AppointmentWhite.svg') }}" style="padding-right: 5px; color: white">
                                Записаться</a>
                            <a href="{{ route('recommendations') }}">Отчеты и Рекомендации</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        <style>
            .consultations_menu a {
                text-decoration: none;
            }
            .consultations_chat_info p {
                font-size: 24px;
            }
            .consultations_buttons{
                font-size: 24px;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }
            .consultations_buttons a{
                text-decoration: none;
                max-width: 340px;
                width: 100%;
                outline: none;
                height: 61px;
                border-radius: 30px;
                font-size: 24px;
                font-family: Roboto;
                text-align: center;
                background: #626DFF;
                border: none;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                color: white;
                margin-bottom: 30px;
            }
            .consultations_chat_info{
                font-size: 36px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .consultations_chat{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-evenly;
                width: 100%;
            }
            .consultations_chat h3{
                font-size: 32px;
                font-family: 700;
            }
            .consultations_position p:nth-child(1){
                font-weight: 700;
            }
            .consultations_position p:nth-child(2){
                color: gray;
            }
            .consultations_position_planed{
                margin-top: 20px!important;
            }
            .consultations_menu_third h3{
                padding-top: 40px!important;
            }
            .consultations_menu_third{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: start;
                height: 450px;
            }
            .consultations_position_empty{
                letter-spacing: 0.05em;
                font-variant: small-caps;
                padding-left: 0px!important;
                align-items: center!important;
            }
            .consultations_position{
                background: white;
                border-radius: 30px;
                max-width: 370px;
                width: 100%;
                height: 90px;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: center;
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 24px;
                line-height: 28px;
                padding-left: 30px;
                margin-left: 15px;
            }
            .consultations_menu h3{
                color: white;
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 28px;
                letter-spacing: 0.05em;
                font-variant: small-caps;
                padding-left: 32px;
            }
            .consultations_menu_line{
                width: 100%;
                border-top: 5px solid white;
                position: absolute;
            }
            .consultations_menu_second{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: start;
                height: 250px;
            }
            .consultations_menu_first{
                width: 100%;
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                align-items: center;
                height: 100px;
            }
            .consultations_menu_first a:nth-child(1){
                outline: none;
                height: 61px;
                max-width: 300px;
                width: 100%;
                border-radius: 30px;
                font-size: 24px;
                font-family: Roboto;
                text-align: center;
                background: white;
                border: none;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                color: black;
            }
            .consultations_menu_first a:nth-child(2){
                outline: none;
                height: 61px;
                max-width: 61px;
                width: 100%;
                border-radius: 360px;
                text-align: center;
                background: white;
                border: none;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }
            .consultations_content_space{
                width: 100%;
                min-height: 800px;
                border-radius: 30px;
                background: var(--color-white);
                box-shadow: 0px 0px 5px 0px var(--color-shadow);
                overflow: hidden;
            }
            .consultations_menu{
                background: #626DFF;
                max-width: 400px;
                width: 100%;
                height: 100%;
                position: relative;
                border-radius: 30px;
            }
            .consultations{
                height: 100%;
                width: 100%;
                display: flex;
                flex-direction: row;
            }
        </style>
    <script>
        $('#consultations').addClass('sidebar_menu_button_active');
    </script>
@endsection
