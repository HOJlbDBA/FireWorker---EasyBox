 <?php
    require_once "functions.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ico.png" type="image/png">
    <title><?=$title?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$cssSlick?>">
    <link rel="stylesheet" href="<?=$cssSlickTheme?>">
    <link rel="stylesheet" href="<?=$css?>">
    <link rel="stylesheet" href="<?=$cssModal?>">
    <link rel="stylesheet" href="<?=$cssUnslider?>">
    <link rel="stylesheet" href="<?=$cssUnsliderDots?>">
    <link rel="stylesheet" href="<?=$cssRuletka?>">
    <style>
        *{font-family: 'Comfortaa', cursive;}
    </style>
    
</head>
<body>
    <header>
        <div class="logo"><img src="img/logo3.png" alt=""></div>
    </header>
    <nav id="shadow" class="sticky">
        <a href="index.php">Главная</a>
        <a href="tovar.php">Товары</a>
        <a href="ruletka.php">Рулетка</a>
    </nav>