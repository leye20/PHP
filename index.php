<?php
  $myTitle = 'My First To-Do List with PHP';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $myTitle?></title>
</head>
<body>
  <h3><?php echo $myTitle?><h3>

  <form action="" method="GET">
    <label for="todo">Add a to-do</label><br>
    <input type="text" name="todo" id="todo">
    <input type="submit" value="Add to List">
    <input type="submit" value="Reset">
  </form>

  <h3>Active To-Do<h3>

  <form action="" method="GET">
    <input type="checkbox" name="activetodo" id="activetodo">
  </form>
  
  <h3><To-Dos>Completed</To-Dos><h3>

  <form action="" method="GET">
    <input type="list" name="completetodo" id="completetodo">
  </form>
</body>
</html>