<?php
/**
 * A basis object
 */
ini_set( 'display_errors', 1);
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );
/**
 * A basis object
 */
$myObject = new stdClass(); // "new" keyword is REQUIRED when making an object from a CLASS (or BLUEPRINT.)
// To add a property to our object, we use the -> arrow syntacx
$myObject->name = 'Jim Bob-Bob';
$myObject->age = 41;
$myObject->interest = array( 'PHP', 'CSS' );

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <h1>PHP OOP</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>$myObject dump:</h2>
    <pre><?php var_dump( $myObject ); ?></pre>
</body>
</html>