<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 15. Старт в PHP</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <?php
            include 'header_logo.inc.php'
            ?>
            <?php
            include 'header_menu.inc.php';
            ?>
        </header>
        <div class="about-me">
            <h1><?php echo $hello ?></h1>
            <div class="about-me__content">
                <div class="about-me__image">
                    <img src="/img/php.jpg" alt="php">
                </div>
                <div class="about-me__info">
                    <p><?php echo 'Меня зовут ' . $name . ' ' . $surname ?></p>
                    <p><?php echo 'Город ' . $city ?></p>
                    <p><?php echo 'Мне ' . $age . ' лет' ?></p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>
            <div class="about-me__knowledge">
                <?php
                include 'knowledge.inc.php';
                echo $a, ' ', $b, ' ', $c . '<br>';

                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo $c . '<br>';
                echo $d;
                ?>
            </div>
            <div class="about-me__text">
                <article>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nulla neque repudiandae necessitatibus 
                        dolor deleniti fuga laudantium quas exercitationem eaque atque consequatur suscipit quos alias inventore 
                        libero eius impedit deserunt, in commodi ducimus dicta provident accusamus qui. Corrupti natus officiis 
                        provident nostrum! Odit, quam? Cumque voluptates vero quibusdam omnis, doloribus dolorem unde laborum debitis 
                        quam voluptatem, quae neque possimus non delectus nobis id at voluptatibus. Odio laborum similique repudiandae 
                        voluptatem aperiam quidem doloribus voluptas vel autem, labore ducimus excepturi minima exercitationem corrupti
                         fuga quis rerum laudantium ad voluptatibus. Atque porro maxime eius blanditiis, nulla nesciunt nemo cum nostrum 
                         est suscipit!</p>
                </article>
            </div>
        </div>
        <footer>
            <?php
            include 'footer.inc.php';
            ?>

        </footer>
    </div>
</body>

</html>