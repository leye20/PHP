<?php
// error debugger!
ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );
  include './includes/blogs.class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog Posts</title>
</head>
<body>
    <h1>PHP Blog Posts</h1>
    <?php
        $articles = new Article( dirname( __FILE__) . './data/blog.json' );
        
        $articles->output();
    ?>
</body>
</html>