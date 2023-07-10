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
    require 'php/_functions.php';
    // require "_queryordername.php";
    require '_queryorderforum.php';

    // foreach ($characters as $character){
    // $characterId = $character['id_characters'];
    // $characterName = $character['name'];
    // $faceclaim = $character['name'];
    // $age = $character['age'];
    // $credit = $character['credit'];
    // $status = $character['status_name'];
    // $gender = $character['gender'];
    // $faction = $character['faction'];
    // $forum = $character['forum_name'];
    // }
    ?>

    <section class="filter">
        <a href="php/_queryorderforum.php" class="filter__btn filter__txt" id="filterForum">Forum</a href="">
        <a href="php/_queryordername.php" class="filter__btn filter__txt" id="filterName">Nom</a href="">
        <a href="php/_queryorderage.php" class="filter__btn filter__txt" id="filterAge">Âge</a href="">
        <a href="php/_queryordergender.php" class="filter__btn filter__txt" id="filterGender">Genre</a href="">
        <a href="php/_queryordercreation.php" class="filter__btn filter__txt" id="filterCreateOrder">Chronologique</a href="">
        <a href="php/_queryorderstatus.php" class="filter__btn filter__txt" id="filterStatus">Statut</a href="">
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
            <!-- <li class="repertory__cont">
                <div class="character-card character-card--blade character-card--iddle">
                    <img class="character-card__img"
                        src="https://64.media.tumblr.com/085ecaa631674b3144ddfc986bd82a1c/9003cdf57b9bf0d2-64/s500x750/c4a24d67ae1707ca2e0f1e50afeb0ebc415d4695.pnj"
                        alt="ava">
                    <div class="character-card__txt--img-right">
                        <p class="character-card__txt--name">Blade</p>
                        <ul class="character-card__lst">
                            <li class="character-card__itm">M</li>
                            <li class="character-card__itm">30</li>
                            <li class="character-card__itm">The Outsiders</li>
                        </ul>
                        <p class="character-card__txt--credit">sneakyskunk</p>
                    </div>
                    <p class="character-card__txt">Bible Wichapas Sumettikul</p>
                    <p class="character-card__txt--bottom">The Red Tide</p>
                </div>
            </li>
            <li class="repertory__cont">
                <div class="character-card character-card--edd">
                    <img class="character-card__img"
                        src="https://64.media.tumblr.com/5313249612f3ec4726b19885204968f8/3946df890a3a2268-59/s500x750/5e23d0b3447ae29000857d78b520c0570fa5fbd2.pnj"
                        alt="ava">
                    <div class="character-card__txt--img-right">
                        <p class="character-card__txt--name">Edden Ikarius</p>
                        <ul class="character-card__lst">
                            <li class="character-card__itm repertory__txt">NB</li>
                            <li class="character-card__itm repertory__txt">361</li>
                            <li class="character-card__itm repertory__txt">The Damned</li>
                        </ul>
                        <p class="character-card__txt--credit">solarismess</p>
                    </div>
                    <p class="character-card__txt">Gauge Burek</p>
                    <p class="character-card__txt--bottom">The Red Tide</p>
                </div>
            </li>
            <li class="repertory__cont">
                <div class="character-card character-card--hell character-card--iddle">
                    <img class="character-card__img"
                        src="https://64.media.tumblr.com/767d172f2e6bf1146b58cb61d272b9d5/661afdcc0e6eb14a-a3/s500x750/fc78e8c1a19a9770723365213d388ec92e7f641b.pnj"
                        alt="ava">
                    <div class="character-card__txt--img-right">
                        <p class="character-card__txt--name">Hellébore Al Kahena</p>
                        <ul class="character-card__lst">
                            <li class="character-card__itm repertory__txt">F</li>
                            <li class="character-card__itm repertory__txt">30</li>
                            <li class="character-card__itm repertory__txt">radicaux</li>
                        </ul>
                        <p class="character-card__txt--credit">fassylovergallery</p>
                    </div>
                    <p class="character-card__txt">La Zarra</p>
                    <p class="character-card__txt--bottom">Maleficis Ambulare</p>
                </div>
            </li>
            <li class="repertory__cont">
                <div class="character-card character-card--rei">
                    <img class="character-card__img"
                        src="https://64.media.tumblr.com/9e69d8fc592c38c25f3234337fa92f86/dd2b641ded1a4437-4a/s500x750/071f743c31f9d0be82df9723abc27bd07bde2683.jpg"
                        alt="ava">
                    <div class="character-card__txt--img-right">
                        <p class="character-card__txt--name">Kurogane Reiji</p>
                        <ul class="character-card__lst">
                            <li class="character-card__itm repertory__txt">M</li>
                            <li class="character-card__itm repertory__txt">41</li>
                            <li class="character-card__itm repertory__txt">evolutionniste</li>
                        </ul>
                        <p class="character-card__txt--credit">everybodydies</p>
                    </div>
                    <p class="character-card__txt">Takamasa Ishihara</p>
                    <p class="character-card__txt--bottom">Maleficis Ambulare</p>
                </div>
            </li>
            <li class="repertory__cont">
                <div class="character-card character-card--theo">
                    <img class="character-card__img" src="https://images2.imgbox.com/77/82/oPF54OF9_o.png" alt="ava">
                    <div class="character-card__txt--img-right">
                        <p class="character-card__txt--name">Thaddeus "Theo" Morina</p>
                        <ul class="character-card__lst">
                            <li class="character-card__itm repertory__txt">M</li>
                            <li class="character-card__itm repertory__txt">20</li>
                            <li class="character-card__itm repertory__txt">pacifieur</li>
                        </ul>
                        <p class="character-card__txt--credit">poesiescendrees</p>
                    </div>
                    <p class="character-card__txt">Joland Novaj</p>
                    <p class="character-card__txt--bottom">Private forum</p>
                </div>
            </li>
            <li class="repertory__cont">
                <div class="character-card character-card--lux">
                    <img class="character-card__img"
                        src="https://64.media.tumblr.com/f1c18a3c16e4a4ac547d38a9bf49e80e/94600f9b49566b17-11/s250x400/39e67d19b05b2009cded16df4696d1dad74c2175.jpg"
                        alt="ava">
                    <div class="character-card__txt--img-right">
                        <p class="character-card__txt--name">Felicia 'Lux' Snyder</p>
                        <ul class="character-card__lst">
                            <li class="character-card__itm repertory__txt">F</li>
                            <li class="character-card__itm repertory__txt">20</li>
                            <li class="character-card__itm repertory__txt">Celestia</li>
                        </ul>
                        <p class="character-card__txt--credit">mortispbf</p>
                    </div>
                    <p class="character-card__txt">Gemma Cowling</p>
                    <p class="character-card__txt--bottom">Whisper in the Night</p>
                </div>
            </li>-->
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