@extends('layout.app')

@section('title', 'Консультации')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('header')
    @include('partials.header')
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
                            <a href="{{ route('recomendations') }}"><img src="{{ asset('/svg/AppointmentHistory.svg') }}"></a>

                        </div>
                        <span class="consultations_menu_line"></span>
                        <h3>Активные<br>Консультации</h3>
                        <div class="consultations_menu_second">
                            @if($appointmentsbusy->isEmpty())
                                <div class="consultations_position consultations_position_empty">
                                    Отсутствуют
                                </div>
                            @else
                                @foreach($appointmentsbusy as $appointment)
                                    <a href="{{ route('chat', ['appointmentId' => $appointment->id ]) }}"
                                       class="consultations_position consultations_position_planed">
                                        <p>{{$appointment->doctor_id }}</p>
                                        <p>{{$appointment->specialization}}</p>
                                        <p>{{$appointment->created_at }}</p>
                                    </a>
                                @endforeach
                            @endif
                        </div>
                        <span class="consultations_menu_line"></span>
                        <h3>Запланированные Консультации</h3>
                        <div class="consultations_menu_third">
                            @if($appointmentsopen->isEmpty())
                                <div class="consultations_position consultations_position_empty">
                                    Отсутствуют
                                </div>
                            @else
                                @foreach($appointmentsopen as $appointment)
                                    <a class="consultations_position consultations_position_planed">
                                        <p>{{$appointment->specialization }}</p>
                                        <p>{{$appointment->trouble}}</p>
                                        <p>{{$appointment->created_at }}</p>
                                    </a>
                                @endforeach
                            @endif
{{--                            <div class="consultations_position consultations_position_planed">--}}
{{--                                <p>Алексей Петрунов</p>--}}
{{--                                <p>Хирург, Терапевт</p>--}}
{{--                                <p>30.12.2023 18:00</p>--}}
{{--                            </div>--}}
{{--                            <div class="consultations_position consultations_position_planed">--}}
{{--                                <p>Алексей Петрунов</p>--}}
{{--                                <p>Хирург, Терапевт</p>--}}
{{--                                <p>30.12.2023 18:00</p>--}}
{{--                            </div>--}}
{{--                            <div class="consultations_position consultations_position_planed">--}}
{{--                                <p>Алексей Петрунов</p>--}}
{{--                                <p>Хирург, Терапевт</p>--}}
{{--                                <p>30.12.2023 18:00</p>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="consultations_chat">
                        <div class="consultations_chat_info">
                            Консультация<pre> <span> (Жанна Петрунова)</span>
                        </div>
                        <div class="consultations_chat_chat">
                            @if($appointmentsopen->isEmpty())
                                    @else
                                        @foreach($appointmentsopen as $appointment)
                                            @php
                                                $parts = explode('|', $appointment->chat);
                                            @endphp
                                            @if($parts[0] == null)
                                            @else
                                                @php
                                                    array_pop($parts);
                                                    $odd = 1;
                                                @endphp
                                                @foreach($parts as $part)
                                                    @if($odd % 2)
                                                        <div class="message from-user">
                                                            <p class="message-content">{{ $part }}</p>
                                                            <p class="message-time_user">13:43</p>
                                                        </div>
                                                    @else
                                                        <div class="message from-bot">
                                                            <p class="message-content">{{ $part }}</p>
                                                            <p class="message-time">13:44</p>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $odd += 1;
                                                    @endphp
                                                @endforeach
                                            @endif

                                        @endforeach
                                    @endif
{{--                            <div class="message from-user">--}}
{{--                                <p class="message-content">Доброе утро, у меня ядреная боль в указательном пальце что делать?</p>--}}
{{--                                <p class="message-time_user">13:43</p>--}}
{{--                            </div>--}}
{{--                            <div class="message from-user">--}}
{{--                                <p class="message-content">Доброе утро, у меня ядреная боль в указательном пальце что делать?</p>--}}
{{--                                <p class="message-time_user">13:43</p>--}}
{{--                            </div>--}}
{{--                            <div class="message from-user">--}}
{{--                                <p class="message-content">Доброе утро, у меня ядреная боль в указательном пальце что делать?</p>--}}
{{--                                <p class="message-time_user">13:43</p>--}}
{{--                            </div>--}}
{{--                            <div class="message from-user">--}}
{{--                                <p class="message-content">Доброе утро, у меня ядреная боль в указательном пальце что делать?</p>--}}
{{--                                <p class="message-time_user">13:43</p>--}}
{{--                            </div>--}}
{{--                            <div class="message from-user">--}}
{{--                                <p class="message-content">Доброе утро, у меня ядреная боль в указательном пальце что делать?</p>--}}
{{--                                <p class="message-time_user">13:43</p>--}}
{{--                            </div>--}}

{{--                            <div class="message from-bot">--}}
{{--                                <p class="message-content">Приветствую, пациент. Ядерная боль может быть вызвана различными причинами, такими как травма, запущенный сустав или даже недостаток кровообращения. Вам нужно сначала определить, что вызвало боль. Попробуйте проверить, нет ли травм или повреждений на коже и суставах. Если вы заметите какие-либо признаки травм, немедленно обратитесь за медицинской помощью. Если нет, попробуйте снять нарушительные предметы, которые могут давить на указательный палец, и проверить, нет ли у вас проблем с кровообращением.</p>--}}
{{--                                <p class="message-time">13:44</p>--}}
{{--                            </div>--}}
                        </div>
                        <div class="consultations_chat_input">
                            <form action="{{ route('chat_update') }}" method="POST" autocomplete="off">
                                @csrf

                                @if($appointmentsopen->isEmpty())
                                    <div class="consultations_position consultations_position_empty">
                                        Отсутствуют
                                    </div>
                                @else
                                    @foreach($appointmentsopen as $appointment)
                                        <input type="text" value="{{ $appointment->id }}" name="appointment_id" placeholder="Введите сообщение" style="display: none">
                                    @endforeach
                                        <input type="text" name="message_field" placeholder="Введите сообщение">
                                        <button type="submit">
                                            <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.5908 24.0939H11.681M11.3434 25.6551L9.37576 31.5328C8.29809 34.7519 7.75926 36.3615 8.14595 37.3526C8.48175 38.2135 9.20298 38.866 10.0929 39.1145C11.1178 39.4004 12.6656 38.7038 15.7614 37.3109L35.6079 28.3799C38.6296 27.02 40.1404 26.3403 40.6073 25.3958C41.0131 24.5752 41.0131 23.6123 40.6073 22.7918C40.1404 21.8475 38.6296 21.1676 35.6079 19.8078L15.7271 10.8615C12.6407 9.47262 11.0975 8.77818 10.0737 9.06306C9.18461 9.31045 8.46346 9.96131 8.12649 10.8205C7.73846 11.8098 8.27154 13.4159 9.33771 16.6281L11.3472 22.6825C11.5303 23.2342 11.6219 23.5101 11.658 23.7921C11.6901 24.0426 11.6898 24.296 11.6571 24.5463C11.6202 24.8283 11.528 25.1038 11.3434 25.6551Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>

                                @endif
                            </form>
                            <style>
                                .message-time_user{
                                    display: flex;
                                    justify-content: end;
                                    transform: translateY(15px);
                                }
                                .message-time{
                                    transform: translateY(15px);
                                }
                                .message{
                                    position: relative;
                                    padding: 25px;
                                    padding-bottom: 25px;
                                    padding-bottom: 35px;
                                    max-width: 600px;
                                    width: auto;
                                    align-self: flex-start;
                                    margin-bottom: 40px;
                                    border-radius: 25px;
                                }
                                .message.from-user {
                                    background-color: #858AD4;
                                    color: white;
                                    margin-left: auto;
                                }
                                .message.from-bot {
                                    background-color: white;
                                    border: 5px solid #858AD4;
                                    margin-right: auto;
                                }
                                .consultations_chat_info{
                                    padding-top: 30px;
                                    font-size: 36px!important;
                                    height: 100px!important;
                                    width: 100%!important;
                                    display: flex!important;
                                    align-content: center!important;
                                    align-items: start!important;
                                    text-align: center!important;
                                    flex-direction: row!important;
                                    justify-content: center!important;
                                    height: 10%!important;
                                }
                                .consultations_chat_chat{
                                    max-height: 600px;
                                    width: 100%;
                                    height: 90%;
                                    background: ;
                                    overflow: scroll;
                                    overflow-x: scroll;
                                    overflow-x: hidden;
                                }
                                .consultations_chat{
                                    display: flex;
                                    flex-direction: column;
                                    align-content: space-between;
                                }
                                .consultations_chat_input{

                                    width: 100%;
                                    display: flex;
                                    justify-content: center;

                                }
                                .consultations_chat_input input{
                                    height: 100%;
                                    outline: none;
                                    width: 100%;
                                    border: none;
                                    background-color: transparent;
                                    font-size: 20px;
                                    padding: 20px;
                                }
                                .consultations_chat_input button {
                                    border: none;
                                    height: 64px;
                                    background-color: #858AD4;
                                    border-radius: 17px;
                                    width: 80px;
                                    cursor: pointer;
                                }
                                form{
                                    display: flex;
                                    justify-content: center;
                                    border: solid 4px #858AD4;
                                    border-radius: 25px;
                                    width: 85%;
                                }

                            </style>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        <style>
            .consultations_position p{
                max-width: 300px;
                width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }
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
                background: #858AD4;
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
                overflow-y: scroll;
                overflow-x: hidden;
                width: 100%;
                border-top: 5px solid white;
                position: absolute;
            }
            .consultations_menu_second{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: start;
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
                font-family: "Fira Sans";
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
                background: #858AD4;
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
