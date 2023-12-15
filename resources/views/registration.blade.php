@extends('layout.app')

@section('title', 'Регистрация')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <!DOCTYPE HTML>
    <html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
    <form class="form registration_form">
        <div class="form_content">
            <h2>Электронный кабинет</h2>
            <ul>
                <li>
                    <label>Логин</label>
                    <input></input>
                </li>
                <li>
                    <label>Пароль</label>
                    <input></input>
                </li>
                <li>
                    <label>Повторите пароль</label>
                    <input></input>
                </li>
                <li>
                    <label>Пол</label>
                    <input></input>
                </li>
                <li>
                    <label>Дата рождения</label>
                    <input></input>
                </li>
            </ul>
            <button>Регистрация</button>
            <b>Уже зарегистрированы? <a href="{{ route('authorization') }}">Войти</a></b>
        </div>
        <div class="form_image">
            <!--        <img src="form_image.png">-->
        </div>

    </form>
    </body>
    </html>
@endsection
