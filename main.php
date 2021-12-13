<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php
    $p = 'Обо мне';
    ?>

    <?php
    $name = 'Oladusky';
    $city = 'Москва';
    $age = 21;
    ?>

    <div class="main_wrapper">
        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'header.inc.php' ?>
        </div>


        
        <div class="about_me">
        <h1> <?php echo $p;  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="img/cat.jpg">'; ?>
                </div>

                <div class="fullname">

                    <p> Меня зовут
                        <?php echo $name . '<br>';
                        echo 'я из города', ' ', $city; ?>
                    </p>

                    <p> Мне
                        <?php echo $age;   ?>
                        год </p>
                    <p> Я изучила основы PHP </p>
                    <p> Создала страничку визитку с помощью PHP </p>
                </div>
            </div>
        </div>

        <div class="knowledge">

            <?php include 'knowledge.inc.php'; ?>

            <p> Количество дней в году:
                <?php echo $a; ?><br>
            </p>

            <p>
                <?php
                $a = 23;
                $b = 55;
                $c = $a + $b;
                echo $c;
                ?><br>
            </p>

            <p>
                <?php
                echo $d;
                ?><br>
            </p>
        </div>

        <div class="article">
            <p class="text">
                <?php echo $str ?>
            </p>
        </div>

        <div class="footer">
            <?php include 'footer.inc.php' ?>
        </div>
    </div>

</body>

</html>