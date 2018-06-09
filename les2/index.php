<?php
    $categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
    $lots = [
        [
            'name' => '2014 Rossignol District Snowboard',
            'category' => $categories[0],
            'price' => 10999,
            'picture_url' => 'img/lot-1.jpg'
        ] ,
        [
            'name' => 'DC Ply Mens 2016/2017 Snowboard',
            'category' => $categories[0],
            'price' => 159999,
            'picture_url' => 'img/lot-2.jpg'
        ] ,
        [
            'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
            'category' => $categories[1],
            'price' => 8000,
            'picture_url' => 'img/lot-3.jpg'
        ] ,
        [
            'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
            'category' => $categories[2],
            'price' => 10999,
            'picture_url' => 'img/lot-4.jpg'
        ] ,
        [
            'name' => 'Куртка для сноуборда DC Mutiny Charocal',
            'category' => $categories[3],
            'price' => 7500,
            'picture_url' => 'img/lot-5.jpg'
        ] ,
        [
            'name' => 'Маска Oakley Canopy',
            'category' => $categories[5],
            'price' => 5400,
            'picture_url' => 'img/lot-6.jpg'
        ]
    ];
?>
<html>
<html lang="ru">

    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Описание сайта"/>
        <meta name="keywords" content="Ключевые слова"/>

        <title>Document</title>

    </head>
    <body>

    <ul class="nav__list">
        <?php
            ksort($categories);
            if (!isset($categories[0])) {
                die;
            }
            $counter = -1;
            while (++$counter<count($categories)) {
        ?>
                <li><?= $categories[$counter]?></li>
        <?php
                }
        ?>
    </ul>
    <ul class="lots__list">
        <?php
            ksort($lots);
            if (!isset($lots[0])) {
                die;
            }
            $counter = -1;
            while (++$counter<count($categories)) {
        ?>
            <li>
                <?php
                foreach($lots[$counter] as $v) {
                    echo $v.' ';
                }
                ?>
            </li>
            <?php
            }
        ?>
    </ul>

    </body>
</html>


