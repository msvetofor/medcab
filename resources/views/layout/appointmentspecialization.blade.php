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
                <select name="specialization" id="specialization_select">
                    @foreach($specializations as $specialization)
                    <option value="dog"> {{ $specialization->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="appointment_selection">
        </div>
    </div>
    <style>
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

            width: 32%;

            height: 64px;
            border-radius: 30px;
            border: solid #707070 1px;
            text-align: center;
        }
    </style>
@endsection
