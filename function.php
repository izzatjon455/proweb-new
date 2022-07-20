<?
session_start();
$pages = [
    'main'=>[
        'name'=>'Главная',
        'icon'=>'fal fa-home'
    ],
    'contact'=>[
        'name'=>'Контакты',
        'icon'=>'fal fa-address-book'
    ],
    'table'=>[
        'name'=>'Таблица умножения',
        'icon'=>'fas fa-times'
    ],
    'calc'=>[
        'name'=>'Калькулятор',
        'icon'=>'fas fa-calculator-alt'
    ],
    'slide'=>[
        'name'=>'Слайдер',
        'icon'=>'far fa-presentation'
    ],
    'guest'=>[
        'name'=>'Гостевая книга',
        'icon'=>'fal fa-books'
    ],
    'test'=>[
        'name'=>'Тест',
        'icon'=>'fal fa-vial'
    ],
    'telegram'=>[
        'name'=>'Telegram',
        'icon'=>'fab fa-telegram'
    ]
   
];

$pageName = $_GET['route'] ?? 'main';