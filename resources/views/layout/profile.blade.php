@extends('layout.app')

@section('title', 'Кабинет')

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
                @include('partials.user_info')
                @yield('path')
                <div class="profile_content" id="content">
                    @yield('profile_content')
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#profile').addClass('sidebar_menu_button_active');
    </script>
@endsection
