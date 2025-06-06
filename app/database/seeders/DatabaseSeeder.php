<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Court;
use App\Models\GeneralType;
use App\Models\Region;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $types = [
            'Районный',
            'Военный',
            'Городской',
            'Субъекта',
            'ВС РФ',
            'Кассационный СОЮ',
            'Апелляционный СОЮ',
            'МС СУ',
            'Арбитраж окружной',
            'Апелляционный арбитраж',
            'Арбитраж',
        ];
        foreach ($types as $type) {
            GeneralType::create(['title' => $type]);
        }

        $regions = [
            "Нижегородская область",
            "Красноярский край",
            "Республика Алтай",
            "Республика Карелия",
            "Калининградская область",
            "Тамбовская область",
            "Тюменская область",
            "Кабардино-Балкарская Республика",
            "Ульяновская область",
            "Камчатский край",
            "Самарская область",
            "Сахалинская область",
            "Свердловская область",
            "Республика Бурятия",
            "Чувашская Республика",
            "Ивановская область",
            "Ненецкий автономный округ",
            "Воронежская область",
            "Кемеровская область",
            "Ханты-Мансийский автономный округ – Югра",
            "Костромская область",
            "Астраханская область",
            "Чеченская Республика",
            "Республика Дагестан",
            "Брянская область",
            "Волгоградская область",
            "Республика Хакасия",
            "Республика Калмыкия",
            "Московская область",
            "Владимирская область",
            "Краснодарский край",
            "Белгородская область",
            "Республика Башкортостан",
            "Новосибирская область",
            "Тверская область",
            "Ярославская область",
            "Забайкальский край",
            "Смоленская область",
            "Кировская область",
            "Калужская область",
            "Алтайский край",
            "Приморский край",
            "Санкт-Петербург",
            "Псковская область",
            "Пермский край",
            "Ямало-Ненецкий автономный округ",
            "Республика Адыгея",
            "Челябинская область",
            "Чукотский автономный округ",
            "Пензенская область",
            "Магаданская область",
            "Карачаево-Черкесская Республика",
            "Ленинградская область",
            "Республика Крым",
            "Республика Коми",
            "Еврейская автономная область",
            "Республика Ингушетия",
            "Хабаровский край",
            "Курская область",
            "Республика Северная Осетия - Алания",
            "Рязанская область",
            "Омская область",
            "Тульская область",
            "Архангельская область",
            "Томская область",
            "Вологодская область",
            "Удмуртская Республика",
            "Москва",
            "Саратовская область",
            "Республика Тыва",
            "Мурманская область",
            "Ростовская область",
            "Республика Марий Эл",
            "Севастополь",
            "Оренбургская область",
            "Амурская область",
            "Иркутская область",
            "Липецкая область",
            "Республика Татарстан",
            "Орловская область",
            "Курганская область",
            "Республика Мордовия",
            "Ставропольский край",
            "Республика Саха (Якутия)",
            "Новгородская область"
        ];

        foreach ($regions as $region) {
            Region::create(['title' => $region]);
        }
    }
}
