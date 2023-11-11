<?php 
session_start();
require_once './core/connection.php';
require_once 'core/function.php' ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List builder</title>
    <link rel="stylesheet" href=<?=url('node_modules/bootstrap-icons/font/bootstrap-icons.css')?>>
    <link rel="stylesheet" href=<?= url('node_modules/bootstrap/dist/css/bootstrap.min.css')?>>
    <link rel="stylesheet" href=<?=url('css/style.css')?>>
</head>
<body>
    <?php require_once 'navbar.php' ?>