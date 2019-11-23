<?php
return (function(){
    $goods = [
        1 => [
            'title' => 'Зеленый меч',
            'category' => CATEGORY_SWORDS,
            'price' => 1,
        ],
        2 => [
            'title' => 'Зеленый меч',
            'category' => CATEGORY_SWORDS,
            'price' => 3,
        ],
        3 => [
            'title' => 'Люк Скайвокер',
            'category' => CATEGORY_REBEL,
            'price' => 1,
        ],
        4 => [
            'title' => 'Принцесса Лея',
            'category' => CATEGORY_REBEL,
            'price' => 1,
        ],
        5 => [
            'title' => 'Хан Соло',
            'category' => CATEGORY_REBEL,
            'price' => 5,
        ],
        6 => [
            'title' => 'Оби Ван Кеноби',
            'category' => CATEGORY_REBEL,
            'price' => 5,
        ],
        7 => [
            'title' => 'Сенатор Органа',
            'category' => CATEGORY_REBEL,
            'price' => 5,
        ],
        8 => [
            'title' => 'Дарт Сидиус',
            'category' => CATEGORY_EMPIRE,
            'price' => 1,
        ],
        9 => [
            'title' => 'Дарт Вейдер',
            'category' => CATEGORY_EMPIRE,
            'price' => 2,
        ],
        10 => [
            'title' => 'Чубака',
            'category' => CATEGORY_REBEL,
            'price' => 6,
        ],
    ];

    foreach ($goods as $k => &$good) {
        $good['id'] = $k;
    }
//    unset($good);

    return $goods;
})();