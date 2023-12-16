<div class="user">
    <div class="user_img">
        <img src="{{ null ?? \App\Helpers\MediaHelper::defaultImage() }}" alt="Фото профиля">
    </div>
    <div class="user_info">
        <div class="user_name">
            {{ $user->name }}
        </div>
        <div class="user_data">
            @php
                function getZodiacalSign($month, $day) {
                    $signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Дева", "Весы", "Скорпион", "Стрелец");
                    $signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
                    return $day < $signsstart[$month + 1] ? $signs[$month - 1] : $signs[$month % 12];
                }
            @endphp
            <p>Дата рождения: {{ $user->date_of_birth }}</p>
            <p>{{ getZodiacalSign(date("n", strtotime($user->date_of_birth)), date("j", strtotime($user->date_of_birth))) }}</p>
        </div>
    </div>
</div>
