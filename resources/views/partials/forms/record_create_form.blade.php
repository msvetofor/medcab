@extends('layout.app')

@section('title', 'Добавление прививки')

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
                <a href="{{ route('records') }}" class="back">
                    <svg width="32px" height="32px" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#707070" d="M224 480h640a32 32 0 110 64H224a32 32 0 010-64z"></path><path fill="#707070" d="M237.248 512l265.408 265.344a32 32 0 01-45.312 45.312l-288-288a32 32 0 010-45.312l288-288a32 32 0 1145.312 45.312L237.248 512z"></path></g></svg>
                    Назад
                </a>
                <div class="form_container">
                    <form action="{{ route('create_record') }}" method="POST" autocomplete="off">
                        @csrf
                        <h2>Добавление записи</h2>
                        <div class="load_file_container">
                            <img src="{{ asset('/images/scan.png') }}" alt="Загрузка скана">
                        </div>
                        <div class="inputs_container">
                            <div class="input_wrapper">
                                <label for="name">Запись</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name"/>
                            </div>
                            <div class="input_wrapper">
                                <label for="address">Адрес</label>
                                <input type="text" value="{{ old('address') }}" name="address" id="address"/>
                            </div>
                            <div class="input_wrapper">
                                <label for="doctor">Доктор</label>
                                <input type="text" value="{{ old('doctor') }}" name="doctor" id="doctor"/>
                            </div>
                            <div class="input_wrapper">
                                <label for="started_at">Дата</label>
                                <input type="date" value="{{ old('started_at') }}" name="started_at" id="started_at"/>
                            </div>
                            <div class="input_wrapper wide">
                                <label for="description">Описание</label>
                                <textarea rows="2" name="description" id="description">{{ old('description') }}</textarea>
                            </div>
                            <div class="input_wrapper">
                                <label for="treatment">Лечение</label>
                                <input type="text" value="{{ old('treatment') }}" name="treatment" id="treatment"/>
                            </div>
                        </div>
                        @foreach($errors->all() as $message)
                            <li style="color: red;">{{ $message }}</li>
                        @endforeach
                        <div style="display: flex; justify-content: flex-end">
                            <button class="form_button creation_button">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#records').addClass('sidebar_menu_button_active');
    </script>
@endsection
