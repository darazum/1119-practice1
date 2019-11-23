<?php
const CATEGORY_SWORDS = 1;
const CATEGORY_REBEL = 2;
const CATEGORY_EMPIRE = 3;
const CATEGORY_WOOKIE = 4;

return (function() {
    $categories = [
        CATEGORY_SWORDS => [
            'id' => CATEGORY_SWORDS,
            'name' => 'Лазерный меч',
        ],
        CATEGORY_REBEL => [
            'id' => CATEGORY_REBEL,
            'name' => 'Повстанцы',
        ],
        CATEGORY_EMPIRE => [
            'id' => CATEGORY_EMPIRE,
            'name' => 'Империя',
        ],
        CATEGORY_WOOKIE => [
            'id' => CATEGORY_WOOKIE,
            'name' => 'Вуки',
        ],
    ];

    return $categories;
})();