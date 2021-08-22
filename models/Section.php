<?php


namespace app\models;


class Section
{
    public $title;
    public $list = [];
    public $image;

    public static function create($title, array $list, $image): self
    {
        $section = new static();
        $section->title = $title;
        $section->list = $list;
        $section->image = $image;
        return $section;
    }

    public static function base(): array
    {
        $sections = [];
        $sections[] = Section::create(
            'Сайт компании',
            [
                'Функционал под специфику Вашего бизнеса',
                'Удобный и интуитивно понятный интерфейс',
                'Мобильная версия Вашего сайта'
            ],
            '/images/longpage_01.jpg'
        );

        $sections[] = Section::create(
            'Создание CRM-систем',
            [
                'Создание закрытых CRM-систем',
                'Функционал любой сложности',
                'Срок разработки от 2 до 6 месяцев'
            ],
            '/images/longpage_02.jpg');

        $sections[] = Section::create(
            'Подключение онлайн-платежей',
            [
                'Подключим Ю-Кассу',
                'Настроим отчетность интернет платежей',
            ],
            '/images/longpage_03.jpg');

        $sections[] = Section::create(
            'Функционал вашего сайта',
            [
                'СМС-уведомления',
                'Чат на сайте',
                'Форум и комментарии к страницам',
                'Мультиязычность'
            ],
            '/images/longpage_04.jpg');

        $sections[] = Section::create(
            'Подключение Яндекс карты, геолокации',
            [
                'API Яндекс.map',
                'Поиск',
                'Построение маршрутов',
                'Добавление собственных областей'
            ],
            '/images/longpage_05.jpg');

        $sections[] = Section::create(
            'Оптимизация сайта под поисковики',
            [
                'SEO-оптимизация сайта',
                'Настройка Заголовков и Описания',
                'ЧПУ ссылки',
                'Подключение мета-тегов schema.org',
                'Оптимизация быстрой загрузки PageSpeed Insights'
            ],
            '/images/longpage_06.jpg');
        return $sections;
    }
}