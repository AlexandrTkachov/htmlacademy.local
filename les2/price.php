<?php
    function form_price ($number) {
        $number = ceil($number);
        if ($number <= 1000) {
            $number = 1000;
        }
        return number_format($number,0,',',' ') . ' <span class="fas fa-ruble-sign fa-sm"></span>';
    }
?>
<html>
<html lang="ru">

<head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <meta charset="UTF-8"/>
    <meta name="description" content="Описание сайта"/>
    <meta name="keywords" content="Ключевые слова"/>

    <title>Document</title>

</head>
<body>

    <span class="lot__cost">
        <?php
        $price = rand(0, 2000000);
        echo form_price($price);?>
    </span>

</body>
</html>