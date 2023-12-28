@extends('layout.app')

@section('title', 'Запись')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/consultant.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style_base.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="body_c">
        <section class="message-box">
            <div class="message-box-header">
                <img src="{{ asset('/images/ai-doctor-logo.png') }}">
                <div class="message-box-header-description">
                    <p>AI Консультант</p>
                    <p>Инновационный интеллектуальный помощник предоставляет консультацию в самых различных областях медицины.</p>
                </div>
            </div>
            <p class="message-box-warning">Консультант не может заменить совет специалиста. Если у вас есть серьезные симптомы или заболевание, важно обратиться за медицинской помощью к профессионалу.</p>
            <div class="message-box-content">
                <div class="messages">
                    <div class="message from-user">
                        <p class="message-content">Доброе утро, у меня ядреная боль в указательном пальце что делать?</p>
                        <p class="message-time">13:43</p>
                    </div>
                    <div class="message from-bot">
                        <p class="message-content">Приветствую, пациент. Ядерная боль может быть вызвана различными причинами, такими как травма, запущенный сустав или даже недостаток кровообращения. Вам нужно сначала определить, что вызвало боль. Попробуйте проверить, нет ли травм или повреждений на коже и суставах. Если вы заметите какие-либо признаки травм, немедленно обратитесь за медицинской помощью. Если нет, попробуйте снять нарушительные предметы, которые могут давить на указательный палец, и проверить, нет ли у вас проблем с кровообращением.</p>
                        <p class="message-time">13:44</p>
                    </div>
                    <div class="message from-user">
                        <p class="message-content">Блин чел спасибо выручил от души просто лучший.</p>
                        <p class="message-time">13:48</p>
                    </div>
                    <div class="message from-user">
                        <p class="message-content">Блин чел спасибо выручил от души просто лучший.</p>
                        <p class="message-time">13:48</p>
                    </div>
                    <div class="message from-user">
                        <p class="message-content">Блин чел спасибо выручил от души просто лучший.</p>
                        <p class="message-time">13:48</p>
                    </div>
                    <div class="message from-bot">
                        <p class="message-content">Приветствую, пациент. Ядерная боль может быть вызвана различными причинами, такими как травма, запущенный сустав или даже недостаток кровообращения. Вам нужно сначала определить, что вызвало боль. Попробуйте проверить, нет ли травм или повреждений на коже и суставах. Если вы заметите какие-либо признаки травм, немедленно обратитесь за медицинской помощью. Если нет, попробуйте снять нарушительные предметы, которые могут давить на указательный палец, и проверить, нет ли у вас проблем с кровообращением.</p>
                        <p class="message-time">13:49</p>
                    </div>
                </div>
                <form>
                    <input type="text" name="message_field" placeholder="Введите сообщение">
                    <button>
                        <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.5908 24.0939H11.681M11.3434 25.6551L9.37576 31.5328C8.29809 34.7519 7.75926 36.3615 8.14595 37.3526C8.48175 38.2135 9.20298 38.866 10.0929 39.1145C11.1178 39.4004 12.6656 38.7038 15.7614 37.3109L35.6079 28.3799C38.6296 27.02 40.1404 26.3403 40.6073 25.3958C41.0131 24.5752 41.0131 23.6123 40.6073 22.7918C40.1404 21.8475 38.6296 21.1676 35.6079 19.8078L15.7271 10.8615C12.6407 9.47262 11.0975 8.77818 10.0737 9.06306C9.18461 9.31045 8.46346 9.96131 8.12649 10.8205C7.73846 11.8098 8.27154 13.4159 9.33771 16.6281L11.3472 22.6825C11.5303 23.2342 11.6219 23.5101 11.658 23.7921C11.6901 24.0426 11.6898 24.296 11.6571 24.5463C11.6202 24.8283 11.528 25.1038 11.3434 25.6551Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>
            </div>
        </section>
        <img class="xmas-magic-rightmost" src="{{ asset('/images/tree.png') }}">
        <img class="xmas-magic-leftmost" src="{{ asset('/images/tree.png') }}">
    </div>

    <script>
        active = elements = document.getElementsByClassName('nav-item');
        console.log(active);
        active[3].classList.add('active');
    </script>

@endsection