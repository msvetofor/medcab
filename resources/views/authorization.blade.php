@extends('layout.app')

@section('title', 'Авторизация')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style_base.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="form_container">
        <form class="form" action="{{ route('authorization') }}" method="POST" autocomplete="off">
            @csrf
            <div class="form_content">
                <h2>Электронный кабинет</h2>
                <div class="input_wrapper">
                    <label for="email">E-Mail</label>
                    <input type="email" value="{{ old('email') }}" name="email" id="email"/>
                </div>
                <div class="input_wrapper">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password"/>
                </div>
                <div style="margin-left: 10px">
                    <input type="checkbox" name="remember" id="remember"/> <label for="remember">Запомнить меня</label>
                </div>
                @foreach($errors->all() as $message)
                    <li style="color: red;">{{ $message }}</li>
                @endforeach
                <button class="form_button">Вход</button>
                <div class="form_bottom_text">Нет аккаунта? <a href="{{ route('registration') }}">Зарегистрироваться</a></div>
            </div>
            <div class="form_image">
                <img src="{{ asset('/images/form_img.jpg') }}" alt="Удобный интерфейс">
            </div>
        </form>
    </div>
@endsection
