<?php
 ini_set( 'display_errors', 1 );
 ini_set( 'display_startup_errors', 1 );
 error_reporting( E_ALL );
include './includes/Snacks.Class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP and FILE</title>
</head>
<body>
    <h1>OOP and File</h1>
    <?php include './includes/navigation.php'; ?>
    <?php

        $snacks = new Snacks( dirname( __FILE__ ) . './data/oop-and-file.json' );

        $snacks->output();
    ?>
    <h2>Find Snack by Index Number</h2>
    <?php
        // Output just the third snack (remeber, arrays start at index: 0.)
        $snacks->findSnackByIndex( 2 );
    ?>
</body>
</html>