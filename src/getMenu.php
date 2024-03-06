<?php

function getMenu(): array
{
    $menu = [
        [
            'title' => 'Главная',
            'path' => '/',
            'sort' => 10,
            'isAuth' => false,
        ],
        [
            'title' => 'Каталог',
            'path' => '/catalog/',
            'sort' => 2,
            'isAuth' => true,
        ],
        [
            'title' => 'О нас',
            'path' => '/about/',
            'sort' => 20,
            'isAuth' => false,
        ],
        [
            'title' => 'Личный кабинет',
            'path' => '/account/',
            'sort' => 15,
            'isAuth' => false,
        ],
        [
            'title' => 'Кредит',
            'path' => '/credit/',
            'sort' => 10,
            'isAuth' => false,
        ],
    ];

    if (!isAuthorized()) {
        return array_filter($menu, fn ($arr) => ($arr['isAuth'] !== true) ? $arr : null);
    }
    return $menu;
}
