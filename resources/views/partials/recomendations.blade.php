@extends('layout.profile')

@section('path')
    <div class="profile_path"><a href="{{ route('profile') }}">Профиль</a> / <a href="{{ route('notifications') }}">Рекомендации врачей</a> /</div>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 200 200" fill="none">
            <path d="M100 16.6667H183.333V100H100V16.6667ZM137.167 73L160.833 49.4167L154.167 42.75L137.5 59.4167L129.167 51.0833L122.5 57.75L137.167 73Z" fill="#1D1D1D" fill-opacity="0.5"/>
            <path d="M16.6667 116.667V183.333H83.3334V116.667H16.6667ZM66.6667 166.667H33.3334V133.333H66.6667V166.667Z" fill="#1D1D1D"/>
            <path d="M100 100H183.333V83.5833L116.667 83.3333L100 100Z" fill="#1D1D1D"/>
            <path d="M166.667 33.3333V83.5L183.333 100V16.6667L166.667 33.3333Z" fill="#1D1D1D" fill-opacity="0.75"/>
            <path d="M83.3334 183.333L66.6667 166.667V133.333L83.3334 116.667V183.333Z" fill="#1D1D1D" fill-opacity="0.5"/>
            <path d="M16.6667 183.333L33.3334 166.667H66.6667L83.3334 183.333H16.6667Z" fill="#1D1D1D" fill-opacity="0.75"/>
            <path d="M16.6667 33.3333V100H83.3334V33.3333H16.6667ZM66.6667 83.3333H33.3334V50H66.6667V83.3333Z" fill="#1D1D1D"/>
            <path d="M83.3334 100L66.6667 83.3333V50L83.3334 33.3333V100Z" fill="#1D1D1D" fill-opacity="0.5"/>
            <path d="M16.6667 100L33.3334 83.3333H66.6667L83.3334 100H16.6667Z" fill="#1D1D1D" fill-opacity="0.75"/>
            <path d="M100 116.667V183.333H166.667V116.667H100ZM150 166.667H116.667V133.333H150V166.667Z" fill="#1D1D1D"/>
            <path d="M166.667 183.333L150 166.667V133.333L166.667 116.667V183.333Z" fill="#1D1D1D" fill-opacity="0.5"/>
            <path d="M100 183.333L116.667 166.667H150L166.667 183.333H100Z" fill="#1D1D1D" fill-opacity="0.75"/>
        </svg>
        <div class="header_title">Рекомендации врачей <span>(Найдено 0)</span></div>
    </div>

    <div class="empty">В настоящее время у вас нет рекомендаций</div>
@endsection
