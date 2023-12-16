@extends('layout.app')

@section('title', 'Авторизация')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <div class="form_container">
        <form class="form">
            <div class="form_content">
                <h2>Электронный кабинет</h2>
                <div class="input_wrapper">
                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login"/>
                </div>
                <div class="input_wrapper">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password"/>
                </div>
                <button class="form_button">Вход</button>
                <div class="form_bottom_text">Нет аккаунта? <a href="{{ route('registration') }}">Зарегистрироваться</a></div>
            </div>
            <div class="form_image">
                <img src="{{ asset('/images/form_img.jpg') }}" alt="Удобный интерыейс">
            </div>
        </form>
    </div>
@endsection
