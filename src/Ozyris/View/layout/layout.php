<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 26/05/16
 * Time: 13:54
 */

use Ozyris\Controller\IndexController;

$oIndexController = new IndexController();
?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../../../../public/css/layout.css">
    <link rel="stylesheet" href="../../../../public/css/header.css">
    <link rel="stylesheet" href="../../../../public/css/form.css">
    <link rel="stylesheet" href="../../../../public/css/element.css">
</head>

<body>

<header>
    <div class="container">
        <?php include_once (__DIR__ . '/header.php'); ?>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php $oIndexController->flashMessages(); ?>
        </div>
    </div>
    <div class="row">
        <?php \Ozyris\Service\Dispatch::dispatch(); ?>
    </div>
</div>

<footer>
    <?php include_once (__DIR__ . '/footer.php'); ?>
</footer>

</body>

</html>
