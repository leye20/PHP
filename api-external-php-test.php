<?php
    $randomUser = file_get_contents( 'http://randomuser.me/api/' );
    $randomUser = json_decode ( $randomUserJSONString );
    $randomUser = $randomUserObject->results[0];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>External API PHP Test</title>
</head>
<body>
    <h1>External API PHP Test</h1>
    <?php include './includes/navigation.php'; ?>
</body>
</html>