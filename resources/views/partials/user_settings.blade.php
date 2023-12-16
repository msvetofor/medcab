@extends('layout.profile')

@section('path')
    <div class="profile_path"><a href="{{ route('profile') }}">Профиль</a> / <a href="{{ route('settings') }}">Настройки</a> /</div>
@endsection

@section('profile_content')
    <form id="update_form" class="setting_form" action="{{ route('settings') }}" method="POST" autocomplete="off">
        @csrf
        <h2>Настройки</h2>
        <div class="form_content">
            <div class="input_wrapper">
                <label for="name">ФИО</label>
                <input type="text" value="{{ old('name') ?? $user->name }}" name="name" id="name"/>
            </div>
            <div class="input_wrapper">
                <label for="email">E-Mail</label>
                <input type="email" value="{{ old('email') ?? $user->email }}" name="email" id="email"/>
            </div>
            <div class="input_wrapper">
                <label for="gender">Пол</label>
                <input type="text" value="{{ old('gender') ?? $user->gender }}" name="gender" id="gender"/>
            </div>
            <div class="input_wrapper">
                <label for="date_of_birth">Дата рождения</label>
                <input type="date" value="{{ old('date_of_birth') ?? $user->date_of_birth }}" name="date_of_birth" id="date_of_birth"/>
            </div>
            <div class="input_wrapper">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password"/>
            </div>
            <div class="input_wrapper">
                <label for="password_confirmation">Подтвердите пароль</label>
                <input type="password" name="password_confirmation" id="password_confirmation"/>
            </div>
        </div>
        @foreach($errors->all() as $message)
            <li style="color: red;">{{ $message }}</li>
        @endforeach
        @if($message = Session::get('message'))
            <li style="color: green">{{$message}}</li>
        @endif
        <div class="buttons_line">
            <a href="{{ route('logout') }}" class="logout">Выйти</a>
            <button class="form_button">Сохранить</button>
        </div>
    </form>
@endsection
