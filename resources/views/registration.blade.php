@extends('layout.app')

@section('title', 'Регистрация')

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
                <div class="input_wrapper">
                    <label for="password_verify">Подтвердите пароль</label>
                    <input type="password" name="password_verify" id="password_verify"/>
                </div>
                <div class="input_wrapper">
                    <label for="gender">Пол</label>
                    <input type="text" name="gender" id="gender"/>
                </div>
                <div class="input_wrapper">
                    <label for="date_of_birth">Дата рождения</label>
                    <input type="date" name="date_of_birth" id="date_of_birth"/>
                </div>
                <button class="form_button">Регистрация</button>
                <div class="form_bottom_text">Уже зарегистрированы? <a href="{{ route('authorization') }}">Войти</a></div>
            </div>
            <div class="form_image">
                <img src="{{ asset('/images/form_img.jpg') }}" alt="Удобный интерфейс">
            </div>
        </form>
    </div>
@endsection
