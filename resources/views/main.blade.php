@extends('layout.app')

@section('title', 'Главная')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style_base.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="content_page">
    <div class="page_container container_reverse ">
        <div class="page_container_content align_items_center">
            <div class="page_container_content_text height430px ">
                <h2>Онлайн-консультация с врачами</h2>
                <p>Общайтесь с врачом в чате, когда неудобно говорить: на работе или в путешествии. Врач может попросить вас сфотографировать то, что беспокоит</p>
                <a href="">Записаться</a>
            </div>
            <img src="{{ asset('/images/doctor.png') }}">
        </div>
    </div>

    <div class="page_container">
        <div class="page_container_content">
            <img src="{{ asset('/images/lekarstva.png') }}">
            <div class="page_container_content_text height430px">
                <h2>Быстрый доступ к вашим медецинским документам</h2>
                <p>Сайт позволяет вам легко и быстро получить доступ ко всем вашим медицинским документам в одном месте</p>
                <p>Вы сможете делиться своими медицинскими данными с врачами, что значительно упрощает процесс консультаций и лечения</p>
            </div>
        </div>
    </div>

    <div class="page_container container_reverse">
        <div class="page_container_content">
            <div class="page_container_content_text">
                <h2>Загружайте справки в любое удобное время</h2>
                <p>Загрузка справок на нашем сайте доступна для вас в любое удобное время. Наш сервис всегда доступен и готов принять ваши документы.</p>
            </div>
            <img src="{{ asset('/images/spravka.png') }}">
        </div>
    </div>

    <div class="page_container contacts">
        <div class="page_container_content">
            <img src="{{ asset('/images/contacts.png') }}">
            <div class="page_container_content_text">
                <h2>Контакты</h2>
                <div>
                    <p>Телефон:</p>
                    <p>+ 7 837 263 6431</p>
                </div>
                <div>
                    <p>Электронная почта:</p>
                    <p>medic@mail.ru</p>
                </div>
                <p>г. Ижевск, ул. Ленина, д. 58</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    active = elements = document.getElementsByClassName('nav-item');
    console.log(active);
    active[0].classList.add('active');
</script>
@endsection
