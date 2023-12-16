@extends('layout.app')

@section('title', 'Запись')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <div class="form_container">
        <div class="appointment_information">
            <h2>Запись к специалисту</h2>
            <nav class="appointment_information_nav">Личный Кабинет > Записаться > Врачи</nav>
            <div class="appointment_information_input">
                <input type="text" for="name" placeholder="Введите ФИО">
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
            <div class="appointment_selection">
                @foreach($doctors as $doctor)
                    <div class="appointment_position">
                        <div class="appointment_position_text">
                            <div>
                                <h3> {{ $doctor->name }} </h3>
                                <small href=""> {{ $doctor->specialization }} </small>

                                <p>
                                Заместитель генерального директора по научной деятельности
                                Кандидат медицинских наук
                                Член Ассоциации онкологов России (АОР), Российской ассоциации терапевтических радиационных онкологов (РАТРО), The European Society for Radiotherapy and Oncology (ESTRO)
                                Участник экспертной группы в рамках Национальной стратегии по борьбе с онкологическими заболеваниями
                                </p>
                            </div>
                            <button>Записаться</button>
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
            color: #626DFF;

        }
        .appointment_position_text p{
            padding-top: 30px;
            font-size: 16px;
        }
        .appointment_selection{
            width: 100%;
        }
        .appointment_position_text{
            justify-content: space-between;
            display: flex;
            flex-direction: column;
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
