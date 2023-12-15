@extends('layout.app')

@section('title', 'Авторизация')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <form class="form authorization_form">
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
            </ul>
            <button>Вход</button>
            <b>Нет аккаунта? <a href="{{ route('registration') }}">Зарегистрироваться</a></b>
        </div>
        <div class="form_image">
            <!--            <img src="form_image.png">-->
        </div>
    </form>
@endsection
