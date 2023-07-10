<?php

try {
    $dbCo = new PDO(
        'mysql:host=localhost;dbname=fil_rouge;charset=utf8',
        'phpuser',
        '123456',
    );

    $dbCo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Can't connect to database." . $e->getMessage());
}
