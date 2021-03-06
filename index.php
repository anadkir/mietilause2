<?php
include "function.php";
?>
<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta charset="utf-8">
        <title>Mietilause</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: <?= $bgColor ?>">
        <div class="card">
            <div class="card__wrapper">
                <p class="quote"><?= $text ?></p>
                <p class="card__text">
                    <span class="name"><?= $name ?></span>
                    <span class="date"><?= $date ?></span>
                </p>
            </div>
        </div>
    </body>
</html>