@extends('layout.app')

@section('title', 'Запись')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="content_space">
                <div class="header">
                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4678 18.0337C10.6907 18.3566 9.03922 19.2137 7.74388 20.5091C6.06672 22.1862 5.125 24.4604 5.125 26.832V32.007C5.125 34.13 6.84572 35.8508 8.96875 35.8508C14.3295 35.8508 26.6705 35.8508 32.0312 35.8508C34.1543 35.8508 35.875 34.13 35.875 32.007V26.832C35.875 24.4604 34.9333 22.1862 33.2561 20.5091C31.9608 19.2137 30.3092 18.3566 28.5322 18.0337C29.1318 16.8306 29.4688 15.475 29.4688 14.04C29.4688 9.09057 25.4495 5.07129 20.5 5.07129C15.5505 5.07129 11.5312 9.09057 11.5312 14.04C11.5312 15.475 11.8682 16.8306 12.4678 18.0337ZM26.7781 20.4424C25.1612 22.0299 22.9433 23.0088 20.5 23.0088C18.0567 23.0088 15.8388 22.0299 14.2219 20.4424C14.1706 20.4489 14.1194 20.4514 14.0681 20.4514C12.3756 20.4514 10.7523 21.1241 9.55684 22.3208C8.36016 23.5174 7.6875 25.1408 7.6875 26.832V32.007C7.6875 32.7143 8.2615 33.2883 8.96875 33.2883H32.0312C32.7385 33.2883 33.3125 32.7143 33.3125 32.007V26.832C33.3125 25.1408 32.6398 23.5174 31.4432 22.3208C30.2478 21.1241 28.6244 20.4514 26.9319 20.4514C26.8806 20.4514 26.8294 20.4489 26.7781 20.4424ZM20.5 7.63379C24.0362 7.63379 26.9062 10.5051 26.9062 14.04C26.9062 17.5763 24.0362 20.4463 20.5 20.4463C16.9638 20.4463 14.0938 17.5763 14.0938 14.04C14.0938 10.5051 16.9638 7.63379 20.5 7.63379Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.625 25.6353H24.3438C23.6365 25.6353 23.0625 26.2093 23.0625 26.9165C23.0625 27.6238 23.6365 28.1978 24.3438 28.1978H25.625V29.479C25.625 30.1863 26.199 30.7603 26.9062 30.7603C27.6135 30.7603 28.1875 30.1863 28.1875 29.479V28.1978H29.4688C30.176 28.1978 30.75 27.6238 30.75 26.9165C30.75 26.2093 30.176 25.6353 29.4688 25.6353H28.1875V24.354C28.1875 23.6468 27.6135 23.0728 26.9062 23.0728C26.199 23.0728 25.625 23.6468 25.625 24.354V25.6353Z" fill="black"/>
                    </svg>
                    <div class="header_title">Запись к специалисту <span>(Найдено специалистов {{ $specializations->count() }})</span></div>
                </div>
                <div class="buttons_line">

                    <a href="{{ route('appointmspecialist') }}" class="create_button">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" style="padding-right: 10px">
                            <g clip-path="url(#clip0_94_391)">
                                <path d="M10 15H30C30.2652 15 30.5196 15.1054 30.7071 15.2929C30.8946 15.4804 31 15.7348 31 16C31 16.2652 30.8946 16.5196 30.7071 16.7071C30.5196 16.8946 30.2652 17 30 17H10C9.73478 17 9.48043 16.8946 9.29289 16.7071C9.10536 16.5196 9 16.2652 9 16C9 15.7348 9.10536 15.4804 9.29289 15.2929C9.48043 15.1054 9.73478 15 10 15Z" fill="#858AD4"/>
                                <path d="M10.4138 16L18.7078 24.292C18.8956 24.4798 19.0011 24.7345 19.0011 25C19.0011 25.2656 18.8956 25.5203 18.7078 25.708C18.5201 25.8958 18.2654 26.0013 17.9998 26.0013C17.7343 26.0013 17.4796 25.8958 17.2918 25.708L8.29183 16.708C8.19871 16.6152 8.12482 16.5048 8.07441 16.3833C8.024 16.2618 7.99805 16.1316 7.99805 16C7.99805 15.8685 8.024 15.7383 8.07441 15.6168C8.12482 15.4953 8.19871 15.3849 8.29183 15.292L17.2918 6.29204C17.4796 6.10427 17.7343 5.99878 17.9998 5.99878C18.2654 5.99878 18.5201 6.10427 18.7078 6.29204C18.8956 6.47982 19.0011 6.73449 19.0011 7.00004C19.0011 7.26559 18.8956 7.52027 18.7078 7.70804L10.4138 16Z" fill="#858AD4"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_94_391">
                                    <rect width="32" height="32" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Вернуться
                    </a>

                        <div class="search_field">
                            <select name="specialization"
                                    id="specialization_select"
                                    value= userSpecialization >
                                @php
                                    {{ $doctor_image_id = 1; $doctor_imagew_id = 1; }}
                                @endphp

                                @foreach($specializations as $specialization)
                                    @if($specialization->name == $userSpecialization )
                                        <option selected> {{ $specialization->name }} </option>
                                    @else
                                        <option> {{ $specialization->name }} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

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
                            <input type="text" id="search" placeholder="ФИО" />
                        </div>
                    </div>
                <div class="appointment_selection">
                    @foreach($doctors as $doctor)
                        <div class="appointment_position">
                            <div class="appointment_position_text">
                                <div>
                                    <h3> {{ $doctor->name }} </h3>
                                    <small href=""> {{ $doctor->specialization }} </small>
                                    <p>
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.9998 21.3334C21.1545 21.3334 25.3332 17.1547 25.3332 12.0001C25.3332 6.84542 21.1545 2.66675 15.9998 2.66675C10.8452 2.66675 6.6665 6.84542 6.6665 12.0001C6.6665 17.1547 10.8452 21.3334 15.9998 21.3334Z" stroke="#1C274C" stroke-width="5"/>
                                            <path opacity="0.5" d="M9.80148 20L8.95232 23.0973C8.11453 26.1531 7.69564 27.6809 8.25463 28.5175C8.45053 28.8105 8.71333 29.0459 9.01829 29.2011C9.88847 29.6441 11.232 28.9441 13.9191 27.544C14.8132 27.0781 15.2603 26.8452 15.7352 26.7945C15.9113 26.7757 16.0887 26.7757 16.2648 26.7945C16.7397 26.8452 17.1868 27.0781 18.0809 27.544C20.768 28.9441 22.1116 29.6441 22.9817 29.2011C23.2867 29.0459 23.5495 28.8105 23.7453 28.5175C24.3044 27.6809 23.8855 26.1531 23.0477 23.0973L22.1985 20" stroke="#1C274C" stroke-width="5" stroke-linecap="round"/>
                                        </svg>
                                        {{ $doctor->achive }}
                                    </p>
                                </div>
                                <a href="{{ route('doctor', ['DoctorId' => $doctor->id  ]) }}">
                                    Записаться
                                </a>

                            </div>
                            @if($doctor->gender == 'male')
                                @php {{$doctor_image = 'doctor_image' . $doctor_image_id . '.PNG'; }} @endphp
                                <img src="{{ asset('/images/' . $doctor_image) }}">
                                @php {{ $doctor_image_id += 1; }} @endphp
                            @else
                                @php {{$doctor_imagew = 'doctor_imagew' . $doctor_imagew_id . '.PNG'; }} @endphp
                                <img src="{{ asset('/images/' . $doctor_imagew) }}">
                                @php {{ $doctor_imagew_id += 1; }} @endphp
                            @endif
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <style>
        .appointment_position a {
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
        .appointment_selection{
            overflow-y: scroll;
        }
        .search_field select{
            font-size: 24px;
            border: none;
            background: white;
            display: flex;
        }
        .appointment_specialization img{
            background-repeat: no-repeat;
            background-size: cover;
            height: 130px;
            width: 130px;
            border-radius: 360px;
        }
        .appointment_specialization{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            height: 600px;
        }
        .appointment_specialization a{
            color: black;
            /*padding-top: 50px;*/
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            font-size: 32px;
            text-decoration: none;
            margin-top: 60px;
            height: 100px;
        }
        .appointment_specialization_position{
            height: 100px;
            border-radius: 360px;
            width: 100px;
        }
        .appointment_position_text{
            justify-content: space-between;
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .appointment_position_text p{
            padding-top: 30px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }
    </style>
    <script>
        $('#consultations').addClass('sidebar_menu_button_active');
    </script>











            </div>

        </div>

    </div>
    <style>

        .appointment_position button{
            width: 200px;
            height: 42px;
        }
        .appointment_position{
            margin-top: 15px;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .appointment_position img{
            border-radius: 360px;
            height: 300px;
        }
        .appointment_position h3{
            font-size: 32px;
        }
        .appointment_position small{
            padding-top: 5px;
            font-size: 32px;
            color: #858AD4;

        }

        .appointment_selection{
            width: 100%;
        }

        .appointment_information{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 1000px;
            width: 100%;
            height: 100%;
            max-height: 700px;
        }
        .appointment_information_nav{
            padding-top: 10px;
            padding-bottom: 25px;
            color: gray;
        }
        .appointment_information h2{
            font-size: 40px;
        }
        .appointment_information_input{

        }
        .appointment_information_input input{
            font-size: 20px;
            outline:none;

            width: 60%;

            height: 64px;
            border-radius: 30px;
            border: solid #707070 1px;
            padding-left: 60px;
            padding-right: 10px;
            background: #FFFFFF;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
            border-radius: 30px;

        }
        .appointment_information_input input::placeholder{
            /* text-align: center; */
        }
        .appointment_information_input select{
            font-size: 20px;
            outline:none;
            color: gray;
            background: white;

            width: 39%;

            height: 64px;
            border-radius: 30px;
            border: solid #707070 1px;
            text-align: center;
        }
    </style>
@endsection
