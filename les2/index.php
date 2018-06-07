<?php
    $is_auth=false;
    $user_avatar = "http://lorempixel.com/40/40";
    $user_name = "MyLogin";
    if (rand(0,1)==1) $is_auth=true;
?>
<html>
<html lang="ru">

    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Описание сайта"/>
        <meta name="keywords" content="Ключевые слова"/>

<!--        <link href="css/bootstrap.css" rel="stylesheet"/>-->
<!--        <link rel="stylesheet" href="css/style.css"/>-->
<!--        <link href="css/font-awesome.css" rel="stylesheet">-->
<!--        <link rel="shortcut icon" href="http://..." type="image/x-icon"/>-->

        <title>Document</title>

    </head>
    <body>
        <nav class="user-menu">
            <?php
            if ($is_auth) {
                ?>
                <div class="user-menu__image">
                    <img src="<?=$user_avatar?>" width="40" height="40" alt="User"/>
                </div>
                <div class="user-menu__logged">
                    <p><?=$user_name?></p>
                </div>
            <?php
            } else {
            ?>
                <ul class="user-menu__list">
                    <li class="user-menu__item">
                        <a href="#">Register</a>
                    </li>
                    <li class="user-menu__item">
                        <a href="#">Sign In</a>
                    </li>
                </ul>
            <?php
            }
            ?>
        </nav>
    </body>
</html>


