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
                <img src="{{ asset('/images/consultant/ai-doctor-logo.png') }}">
                <div class="message-box-header-description">
                    <p>AI Консультант</p>
                    <p>Инновационный интеллектуальный помощник предоставляет консультацию в самых различных областях медицины.</p>
                </div>
            </div>
            <p class="message-box-warning">Консультант не может заменить совет специалиста. Если у вас есть серьезные симптомы или заболевание, важно обратиться за медицинской помощью к профессионалу.</p>
            <div class="message-box-content">
                <div class="messages">

                    <div class="message from-bot">
                        <p class="message-content">Приветствую, пациент.</p>
                        <p class="message-time">13:44</p>
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
    <style>
        *, *:before, *:after {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .message-box-content form button {
            height: 66px!important;
        }
        body {
            padding: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            display: contents!important;
        }

        .message-box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: 'Roboto';
            max-width: 1140px;
            width: 100%;
            border: 5px solid #858AD4;
            border-radius: 25px;
        }

        .message-box-header {
            display: flex;
            align-items: center;
            min-height: 82px;
            height: 100%;
            width: 100%;
            padding-bottom: 6px;
            border: 5px solid #858AD4;
            background-color: #858AD4;
            border-radius: 13px 13px 25px 25px;
            color: white;
        }

        .message-box-header img {
            border-radius: 25px;
        }

        .message-box-header p:first-child {
            font-size: 22px;
            font-weight: bold;
        }

        .message-box-header p:last-child {
            font-size: 16px;
        }

        .message-box-header-description {
            padding: 0px 10px;
        }

        .message-box-header-description p:first-child {
            margin-bottom: 10px;
        }

        .message-box-warning {
            padding: 10px;
            padding-top: 5px;
            text-align: center;
            width: 100%;
            font-size: 12px;
        }

        .message-box-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: 30px;
            width: 100%;
            height: 700px!important;
        }

        .messages {
            width: 100%;
            max-height: 700px;
            overflow: auto;
            display: flex;
            flex-direction: column;
            align-self: flex-start;
        }

        .messages::-webkit-scrollbar {
            scroll-margin: 10px;
            width: 20px;
        }

        .messages::-webkit-scrollbar-track {
            padding: 5px;
            background-color: white;

        }

        .messages::-webkit-scrollbar-thumb {
            background-color: #858AD4;
            border: 7px solid white;
            border-radius: 15px;
        }

        .message {
            position: relative;
            padding: 25px;
            padding-bottom: 35px;
            max-width: 700px;
            width: auto;
            align-self: flex-start;
            margin-bottom: 40px;
            border-radius: 25px;
        }

        .message-content {
            font-size: 16px;
        }

        .message-time {
            font-weight: bold;
            font-size: 14px;
            position: absolute;
            margin-right: 15px;
            margin-top: 10px;
            right: 0;
        }

        .message:last-child {
            margin-bottom: 0px;
        }

        .message.from-user {
            background-color: #858AD4;
            color: white;
            margin-left: auto;
        }

        .message.from-bot {
            background-color: white;
            border: 5px solid #858AD4;
            margin-right: auto;
        }

        .message.from-bot.bot-thinking {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 25px;
            padding-right: 35px;
            padding-left: 35px;
        }

        .dot-flashing {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: black;
            color: black;
            animation: dot-flashing 1s infinite linear alternate;
            animation-delay: 0.5s;
        }

        .dot-flashing::before, .dot-flashing::after {
            content: "";
            display: inline-block;
            position: absolute;
            top: 0;
        }

        .dot-flashing::before {
            left: -15px;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: black;
            color: black;
            animation: dot-flashing 1s infinite alternate;
            animation-delay: 0s;
        }

        .dot-flashing::after {
            left: 15px;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: black;
            color: black;
            animation: dot-flashing 1s infinite alternate;
            animation-delay: 1s;
        }

        @keyframes dot-flashing {
            0% {
                background-color: black;
            }

            50%, 100% {
                background-color: #ccc;
            }
        }

        .message-box-content form {
            border: 5px solid #858AD4;
            border-radius: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        .message-box-content form input {
            height: 100%;
            outline: none;
            width: 100%;
            border: none;
            background-color: transparent;
            font-size: 20px;
            padding: 20px;
        }

        .message-box-content form button {
            border: none;
            height: 63px;
            background-color: #858AD4;
            border-radius: 17px;
            width: 80px;
            cursor: pointer;
        }

        .message-box-content form button svg {
            margin-left: 7px;
        }

        .xmas-magic-rightmost {
            position: fixed;
            bottom: 0;
            right: 0;
            transform: translate(200px, 100px);
            width: 400px;
        }

        .xmas-magic-leftmost {
            position: fixed;
            bottom: 0;
            left: 0;
            transform: translate(-200px, 100px);
            width: 400px;
        }
    </style>
    <script>
        window.onload = () => {
            const button = document.querySelector(".message-box-content form button");

            let messages = ["Если болит голова, вы можете попробовать следующее:<br><br>1. Принять обезболивающее средство.<br>2. Отдохнуть и расслабиться<br>3. Применить холодный или теплый компресс.<br>4. Избегать триггеров, которые могут вызвать боль.<br>5. Если боли становятся частыми или сильными, обратиться к врачу.",
                "Если болит нога, то в первую очередь нужно отдохнуть и не нагружать больную ногу. Если возможно, следует поднять ногу, чтобы улучшить кровообращение и снизить отек. Если есть отек или сильная боль, можно применить холод на больное место. Если боль сильная, можно принять обезболивающее, но при этом необходимо следовать инструкции по применению. Если боль не проходит или усиливается, следует обратиться к врачу для диагностики и лечения.",
                "Если у вас пошла кровь из носа, сядьте и наклонитесь вперед, прижмите ноздри пальцами на несколько минут, нанесите холод на область носа и избегайте напряжения, наклона головы вниз и физической активности в течение нескольких часов. Если кровотечение не останавливается в течение 20 минут или если оно происходит регулярно, обратитесь к врачу для дальнейшей консультации и оценки.",
                "Если у вас кружится голова, следуйте этим рекомендациям:<br><br>1. Сядьте или лягте, чтобы предотвратить падение.<br>2. Поднесите голову к коленям или наклонитесь вперед, чтобы улучшить кровообращение в мозге.<br>3. Дышите глубоко и медленно, чтобы снять напряжение и улучшить кровообращение.<br>4. Избегайте резких движений и вставайте медленно.<br>5. Если головокружение не проходит или возникает регулярно, обратитесь к врачу для консультации.<br><br>Помните, что эти рекомендации предназначены для общей информации. В случае серьезных или продолжительных проблем с головокружением обязательно обратитесь к врачу.",
                "Если кожа чешется, можно:<br><br>1. Избегать царапания, чтобы не повредить кожу.<br>2. Промыть прохладной водой или применить холодный компресс.<br>3. Использовать увлажняющий крем или лосьон.<br>4. Избегать агрессивных средств по уходу за кожей.<br>5. При продолжающемся зуде обратиться к врачу."];

            button.onclick = function(event) {
                event.preventDefault();

                // user input
                const message = document.querySelector(".message-box-content form input");

                // message-box
                const messageBox = document.querySelector(".messages");

                // user message
                var userMessage = document.createElement("div");
                userMessage.className = "message from-user";

                // user message content
                var userMessageContent = document.createElement("p");
                userMessageContent.className = "message-content";
                userMessageContent.innerHTML = message.value;

                // user message time
                var userMessageTime = document.createElement("p");
                userMessageTime.className = "message-time";
                var sendDate = new Date();
                var sendTime = sendDate.toLocaleTimeString();
                userMessageTime.innerHTML = sendTime.slice(0, -3);

                // append element to user message
                userMessage.appendChild(userMessageContent);
                userMessage.appendChild(userMessageTime);

                // bot thinking
                var botThinking = document.createElement("div");
                botThinking.className = "message from-bot bot-thinking";

                // bot thinking dots
                var dots = document.createElement("div");
                dots.className = "dot-flashing";

                // add to message-box
                botThinking.appendChild(dots);
                messageBox.appendChild(userMessage);
                messageBox.appendChild(botThinking);

                setTimeout(function() {
                    messageBox.removeChild(botThinking);
                    // bot message
                    var botMessage = document.createElement("div");
                    botMessage.className = "message from-bot";

                    // bot message content
                    var botMessageContent = document.createElement("p");
                    botMessageContent.className = "message-content";

                    if(message.value == "Что делать если болит голова")
                        botMessageContent.innerHTML = messages[0];
                    else if(message.value == "Что делать если кружится голова")
                        botMessageContent.innerHTML = messages[3];
                    else if(message.value == "Что делать если пошла кровь из носа")
                        botMessageContent.innerHTML = messages[2];
                    else if(message.value == "Что делать если болит нога")
                        botMessageContent.innerHTML = messages[1];
                    else if(message.value == "Что делать если чешется кожа")
                        botMessageContent.innerHTML = messages[4];

                    // bot message time
                    var botMessageTime = document.createElement("p");
                    botMessageTime.className = "message-time";
                    var sendDate = new Date();
                    var sendTime = sendDate.toLocaleTimeString();
                    botMessageTime.innerHTML = sendTime.slice(0, -3);

                    // append element to bot message
                    botMessage.appendChild(botMessageContent);
                    botMessage.appendChild(botMessageTime);

                    messageBox.appendChild(botMessage);
                }, Math.random() * (5000 - 1000) + 1000);
            }
        }
    </script>
@endsection



