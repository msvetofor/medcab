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
                    <div class="header">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_173_97)">
                                <path d="M3.02393 39.0239C3.02393 41.5199 3.88793 43.6319 5.61593 45.3599C7.34393 47.0879 9.47193 47.9679 11.9999 47.9999H27.0239V44.4959C25.7439 44.0159 24.5599 43.1839 23.4719 41.9999H11.9999C11.1679 41.9999 10.4639 41.7119 9.88793 41.1359C9.31193 40.5599 9.02393 39.8559 9.02393 39.0239C9.69593 36.4319 11.1679 34.2879 13.4399 32.5919C15.7119 30.8959 18.2399 30.0319 21.0239 29.9999C21.7599 29.9999 22.4799 30.0799 23.1839 30.2399C24.3679 28.8639 25.7759 27.9359 27.4079 27.4559C27.7919 26.2079 28.4159 25.0879 29.2799 24.0959C30.1439 23.1039 31.1519 22.3519 32.3039 21.8399C32.7839 20.5599 33.0239 19.2799 33.0239 17.9999V11.9999C33.0239 8.7039 31.8399 5.8879 29.4719 3.5519C27.1039 1.2159 24.2879 0.0318992 21.0239 -0.000100843C17.7599 -0.0321008 14.9279 1.1519 12.5279 3.5519C10.1279 5.9519 8.95993 8.7679 9.02393 11.9999V17.9999C9.02393 21.1679 10.1279 23.9359 12.3359 26.3039C9.93593 27.6479 7.88793 29.4239 6.19193 31.6319C4.49593 33.8399 3.43993 36.3039 3.02393 39.0239ZM15.0239 17.9999V11.9999C15.0239 10.3679 15.5999 8.9599 16.7519 7.7759C17.9039 6.5919 19.3279 5.9999 21.0239 5.9999C22.7199 5.9999 24.1279 6.5919 25.2479 7.7759C26.3679 8.9599 26.9599 10.3679 27.0239 11.9999V17.9999C27.0239 19.6639 26.4319 21.0879 25.2479 22.2719C24.0639 23.4559 22.6559 24.0319 21.0239 23.9999C19.3919 23.9679 17.9679 23.3919 16.7519 22.2719C15.5359 21.1519 14.9599 19.7279 15.0239 17.9999ZM27.0239 35.9999C27.0239 36.8319 27.3119 37.5519 27.8879 38.1599C28.4639 38.7679 29.1679 39.0559 29.9999 39.0239H33.0239V41.9999C33.0239 42.8319 33.3119 43.5519 33.8879 44.1599C34.4639 44.7679 35.1679 45.0559 35.9999 45.0239C36.8319 44.9919 37.5359 44.7039 38.1119 44.1599C38.6879 43.6159 38.9919 42.8959 39.0239 41.9999V39.0239H41.9999C42.8319 39.0239 43.5359 38.7359 44.1119 38.1599C44.6879 37.5839 44.9919 36.8639 45.0239 35.9999C45.0559 35.1359 44.7519 34.4319 44.1119 33.8879C43.4719 33.3439 42.7679 33.0559 41.9999 33.0239H39.0239V29.9999C39.0239 29.1679 38.7199 28.4639 38.1119 27.8879C37.5039 27.3119 36.7999 27.0239 35.9999 27.0239C35.1999 27.0239 34.4959 27.3119 33.8879 27.8879C33.2799 28.4639 32.9919 29.1679 33.0239 29.9999V33.0239H29.9999C29.1679 33.0239 28.4639 33.3119 27.8879 33.8879C27.3119 34.4639 27.0239 35.1679 27.0239 35.9999Z" fill="#1D1D1D"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_173_97">
                                    <rect width="48" height="48" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="header_title">Заявки <span>{{$appointmentsopen->count()}}</span></div>
                    </div>
                    <div class="search_field_div">
                        <div class="search_field">
                            <label for="search" style="margin-right: 15px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <g clip-path="url(#clip0_5_214)">
                                        <mask id="path-1-inside-1_5_214" fill="white">
                                            <path d="M17.6933 0C9.80475 0 3.38689 6.41786 3.38689 14.3065C3.38689 16.6358 3.94683 18.8368 4.93857 20.7823L1.29814 24.4227C-0.43304 26.1538 -0.43304 28.9706 1.29814 30.7016C2.16364 31.5672 3.30064 31.9999 4.43757 31.9999C5.57457 31.9999 6.71163 31.5672 7.57707 30.7016L11.2174 27.0612C13.1631 28.053 15.3641 28.6129 17.6933 28.6129C25.5818 28.6129 31.9997 22.195 31.9997 14.3065C31.9997 6.41793 25.5819 0 17.6933 0ZM5.4842 28.6086C4.90701 29.1858 3.9682 29.1856 3.39114 28.6086C2.81402 28.0316 2.81402 27.0926 3.39114 26.5156L6.58988 23.317C7.21382 24.0845 7.91544 24.786 8.68288 25.41L5.4842 28.6086ZM17.6933 25.653C11.4369 25.653 6.34682 20.5629 6.34682 14.3065C6.34682 8.05005 11.4369 2.95999 17.6933 2.95999C23.9497 2.95999 29.0398 8.04998 29.0398 14.3065C29.0398 20.563 23.9498 25.653 17.6933 25.653Z"/>
                                        </mask>
                                        <path d="M17.6933 0C9.80475 0 3.38689 6.41786 3.38689 14.3065C3.38689 16.6358 3.94683 18.8368 4.93857 20.7823L1.29814 24.4227C-0.43304 26.1538 -0.43304 28.9706 1.29814 30.7016C2.16364 31.5672 3.30064 31.9999 4.43757 31.9999C5.57457 31.9999 6.71163 31.5672 7.57707 30.7016L11.2174 27.0612C13.1631 28.053 15.3641 28.6129 17.6933 28.6129C25.5818 28.6129 31.9997 22.195 31.9997 14.3065C31.9997 6.41793 25.5819 0 17.6933 0ZM5.4842 28.6086C4.90701 29.1858 3.9682 29.1856 3.39114 28.6086C2.81402 28.0316 2.81402 27.0926 3.39114 26.5156L6.58988 23.317C7.21382 24.0845 7.91544 24.786 8.68288 25.41L5.4842 28.6086ZM17.6933 25.653C11.4369 25.653 6.34682 20.5629 6.34682 14.3065C6.34682 8.05005 11.4369 2.95999 17.6933 2.95999C23.9497 2.95999 29.0398 8.04998 29.0398 14.3065C29.0398 20.563 23.9498 25.653 17.6933 25.653Z" fill="#707070"/>
                                        <path d="M4.93857 20.7823L8.47411 24.3178L11.0433 21.7486L9.39317 18.5115L4.93857 20.7823ZM1.29814 24.4227L4.83355 27.9584L4.83368 27.9582L1.29814 24.4227ZM1.29814 30.7016L4.83393 27.1663L4.83355 27.166L1.29814 30.7016ZM7.57707 30.7016L4.0415 27.1661L4.04128 27.1663L7.57707 30.7016ZM11.2174 27.0612L13.4882 22.6066L10.2511 20.9565L7.68187 23.5257L11.2174 27.0612ZM5.4842 28.6086L1.9487 25.0731L1.94866 25.0731L5.4842 28.6086ZM3.39114 28.6086L6.92648 25.0729L3.39114 28.6086ZM3.39114 26.5156L6.92629 30.0516L6.9266 30.0512L3.39114 26.5156ZM6.58988 23.317L10.4695 20.1629L6.97334 15.8626L3.05442 19.7814L6.58988 23.317ZM8.68288 25.41L12.2184 28.9456L16.1372 25.0268L11.8372 21.5306L8.68288 25.41ZM17.6933 -5C7.04331 -5 -1.61311 3.65645 -1.61311 14.3065H8.38689C8.38689 9.17927 12.5662 5 17.6933 5V-5ZM-1.61311 14.3065C-1.61311 17.4457 -0.856843 20.4228 0.483975 23.0531L9.39317 18.5115C8.7505 17.2507 8.38689 15.826 8.38689 14.3065H-1.61311ZM1.40304 17.2467L-2.23739 20.8872L4.83368 27.9582L8.47411 24.3178L1.40304 17.2467ZM-2.23726 20.887C-5.92124 24.5708 -5.92124 30.5536 -2.23726 34.2373L4.83355 27.166C5.05516 27.3876 5.05516 27.7368 4.83355 27.9584L-2.23726 20.887ZM-2.23765 34.2369C-0.393432 36.0814 2.03359 36.9999 4.43757 36.9999V26.9999C4.56769 26.9999 4.72072 27.0531 4.83393 27.1663L-2.23765 34.2369ZM4.43757 36.9999C6.84164 36.9999 9.26872 36.0813 11.1129 34.2369L4.04128 27.1663C4.15455 27.0531 4.3075 26.9999 4.43757 26.9999V36.9999ZM11.1126 34.2371L14.753 30.5967L7.68187 23.5257L4.0415 27.1661L11.1126 34.2371ZM8.94669 31.5158C11.5771 32.8567 14.5542 33.6129 17.6933 33.6129V23.6129C16.1739 23.6129 14.7491 23.2493 13.4882 22.6066L8.94669 31.5158ZM17.6933 33.6129C28.3433 33.6129 36.9997 24.9564 36.9997 14.3065H26.9997C26.9997 19.4336 22.8204 23.6129 17.6933 23.6129V33.6129ZM36.9997 14.3065C36.9997 3.65654 28.3434 -5 17.6933 -5V5C22.8204 5 26.9997 9.17931 26.9997 14.3065H36.9997ZM1.94866 25.0731C3.32462 23.6971 5.55148 23.6981 6.92648 25.0729L-0.144203 32.1444C2.38492 34.6732 6.48941 34.6745 9.01973 32.1442L1.94866 25.0731ZM6.92648 25.0729C8.30213 26.4484 8.3024 28.6757 6.92629 30.0516L-0.144012 22.9797C-2.67437 25.5095 -2.6741 29.6147 -0.144203 32.1444L6.92648 25.0729ZM6.9266 30.0512L10.1253 26.8526L3.05442 19.7814L-0.144326 22.98L6.9266 30.0512ZM2.71029 26.4712C3.55062 27.5048 4.4953 28.4493 5.52852 29.2895L11.8372 21.5306C11.3356 21.1227 10.877 20.6641 10.4695 20.1629L2.71029 26.4712ZM5.14738 21.8744L1.9487 25.0731L9.0197 32.1442L12.2184 28.9456L5.14738 21.8744ZM17.6933 20.653C14.1983 20.653 11.3468 17.8015 11.3468 14.3065H1.34682C1.34682 23.3243 8.67545 30.653 17.6933 30.653V20.653ZM11.3468 14.3065C11.3468 10.8115 14.1983 7.95999 17.6933 7.95999V-2.04001C8.67545 -2.04001 1.34682 5.28862 1.34682 14.3065H11.3468ZM17.6933 7.95999C21.1883 7.95999 24.0398 10.8114 24.0398 14.3065H34.0398C34.0398 5.28854 26.7111 -2.04001 17.6933 -2.04001V7.95999ZM24.0398 14.3065C24.0398 17.8015 21.1884 20.653 17.6933 20.653V30.653C26.7112 30.653 34.0398 23.3244 34.0398 14.3065H24.0398Z" fill="#707070" mask="url(#path-1-inside-1_5_214)"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5_214">
                                            <rect width="32" height="32" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </label>
                            <input type="text" id="search" placeholder="Найти" />
                        </div>
                    </div>
                </div>
                <div  class="consultations_list">
                    @if($appointmentsopen->isEmpty())
                        <div class="consultations_position consultations_position_empty">
                            Отсутствуют
                        </div>
                    @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Специалист</th>
                            <th>Проблема</th>
                            <th>Операции</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointmentsopen as $appointment)
                            <tr style="text-align: center">
                                <td>{{$appointment->user_id }}</td>
                                <td> {{$appointment->specialization }}</td>
                                <td>{{$appointment->trouble}}</td>
                                <td><a href="{{ route('chat', ['appointmentId' => $appointment->id ]) }}">Принять</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
        </div>

{{--            @foreach($appointmentsopen as $appointment)--}}
{{--                <a class="consultations_position consultations_position_planed">--}}
{{--                    <p>{{$appointment->user_id }}</p>--}}
{{--                    <p>{{$appointment->specialization }}</p>--}}
{{--                    <p>{{$appointment->trouble}}</p>--}}
{{--                    <p>{{$appointment->created_at }}</p>--}}
{{--                    <p>чат</p>--}}
{{--                </a>--}}
{{--            @endforeach--}}











    </div>
        <style>
            .consultations_list{
                display: flex;
                justify-content: center;
            }
            .search_field_div{
                width: 100%;
                display: flex;
                justify-content: end;
            }
            .search_field{
                margin-right: 20px;
            }
            .consultations{
                flex-direction: column!important;
            }
            .header{
                margin-left: 40px;
                margin-top: 20px;
            }
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
