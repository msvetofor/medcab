@extends('layout.profile')

@section('path')
    <div class="profile_path"><a href="{{ route('profile') }}">Профиль</a> / <a href="{{ route('notifications') }}">Уведомления</a> /</div>
@endsection

@section('profile_content')
    @if($message = Session::get('message'))
        <div class="fade_out">
            {{ $message }}
            <script>
                setTimeout(function () {
                    $('.fade_out').fadeOut();
                }, 2000);
            </script>
        </div>
    @endif
        <div class="header">
            <svg width="46" height="46" viewBox="0 0 156 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M51.9867 119H24.7922C14.7138 119 9.67457 119 8.61429 118.218C7.42314 117.34 7.13211 116.822 7.00308 115.349C6.88832 114.038 9.97682 108.989 16.154 98.8928C22.5318 88.468 27.9473 73.2896 27.9473 51.8C27.9473 39.9183 33.01 28.5233 42.0215 20.1216C51.0331 11.72 63.2555 7 75.9998 7C88.7442 7 100.966 11.72 109.978 20.1216C118.99 28.5233 124.052 39.9183 124.052 51.8C124.052 73.2896 129.468 88.468 135.846 98.8928C142.022 108.989 145.111 114.038 144.997 115.349C144.868 116.822 144.576 117.34 143.386 118.218C142.325 119 137.286 119 127.208 119H100.026M51.9867 119L51.9736 127C51.9736 140.255 62.7309 151 75.9998 151C89.2695 151 100.026 140.255 100.026 127V119M51.9867 119H100.026" stroke="#1D1D1D" stroke-width="14" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="header_title">Уведомления <span>(Найдено 0)</span></div>
        </div>

        <div class="empty">В настоящее время у вас нет уведомлений</div>
@endsection
