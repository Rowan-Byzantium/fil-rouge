<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <header class="header">
        <h1 class="header__ttl">Charalogy</h1>
        <h2 class="header__subttl">La science de vos personnages</h2>
    </header>
    <a href="" class="deconnect"></a>

    <?php
    require 'php/_connection-dtb.php';
    require 'php/_queries.php';
    require_once 'php/_functions.php';
    // require "php/_queryordername.php";
    require 'php/_queryorderforum.php';

    ?>

    <section class="filter">
        <a href="index.php?sorter=forum_name" class="filter__btn filter__txt" id="filterForum">Forum</a href="">
        <a href="index.php" class="filter__btn filter__txt" id="filterName">Nom</a href="">
        <a href="index.php" class="filter__btn filter__txt" id="filterAge">Âge</a href="">
        <a href="index.php" class="filter__btn filter__txt" id="filterGender">Genre</a href="">
        <a href="index.php" class="filter__btn filter__txt" id="filterCreateOrder">Chronologique</a href="">
        <a href="index.php" class="filter__btn filter__txt" id="filterStatus">Statut</a href="">
        <!-- <button class="filter__btn filter__txt" id="filterColors">Couleur</button> -->
    </section>
    <section class="repertory">
        <ul class="repertory__lst">
            <?php
            echo getListofCharacters($characters);

            // var_dump($_GET['filter'])
            // if (array_key_exists('filter', $_GET) && $_GET['filter'] = 'forum') {
            //     echo getListofCharacters($charactersFo);
            // } else {
            //     echo getListofCharacters($characters);
            // };
            ?>
            <li class="repertory__cont">
                <div class="character-card character-card--admin">
                    <button class="character-card__txt button">add character</button>
                    <button class="character-card__txt button">edit character</button>
                    <button class="character-card__txt button">delete character</button>
                </div>
            </li>
        </ul>
    </section>
    <footer class="footer"></footer>
    <script type="text/javascript" src="js/javascript.js"></script>
</body>

</html>