@extends('layout.app')

@section('title', 'Регистрация')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style_base.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="form_container">
        <form class="form" action="{{ route('registration') }}" method="POST" autocomplete="off">
            @csrf
            <div class="form_content">
                <h2>Электронный кабинет</h2>
                <div class="input_wrapper">
                    <label for="name">ФИО</label>
                    <input type="text" value="{{ old('name') }}" name="name" id="name"/>
                </div>
                <div class="input_wrapper">
                    <label for="email">E-Mail</label>
                    <input type="email" value="{{ old('email') }}" name="email" id="email"/>
                </div>
                <div class="input_wrapper">
                    <label for="gender">Пол</label>
                    <input type="text" value="{{ old('gender') }}" name="gender" id="gender"/>
                </div>
                <div class="input_wrapper">
                    <label for="date_of_birth">Дата рождения</label>
                    <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth" id="date_of_birth"/>
                </div>
                <div class="input_wrapper">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password"/>
                </div>
                <div class="input_wrapper">
                    <label for="password_confirmation">Подтвердите пароль</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"/>
                </div>
                @foreach($errors->all() as $message)
                    <li style="color: red;">{{ $message }}</li>
                @endforeach
                <button class="form_button">Регистрация</button>
                <div class="form_bottom_text">Уже зарегистрированы? <a href="{{ route('authorization') }}">Войти</a></div>
            </div>
            <div class="form_image">
                <img src="{{ asset('/images/form_img.jpg') }}" alt="Удобный интерфейс">
            </div>
        </form>
    </div>
@endsection
