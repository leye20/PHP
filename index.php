<?php

$randomTriviaJSONString = file_get_contents( 'https://opentdb.com/api.php?amount=10&category=23&difficulty=medium&type=boolean' );

$randomTriviaObject = json_decode( $randomTriviaJSONString );

$randomTrivia = $randomTriviaObject->results[0]

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Assignment</title>
</head>
<body>
    <h1>Random Trivia Question</h1>
    <h2>Random Trivia Question</h2>
    <dl>
        <dt>Category</dt>
        <dd>
            <?php echo $randomTrivia->category; ?>
        </dd>
        <dt>Difficulty</dt>
        <dd>
            <?php echo $randomTrivia->difficulty; ?>
        </dd>
        <dt>Question</dt>
        <dd>
            <?php echo $randomTrivia->question; ?>
        </dd>
        <dt>Answer!</dt>
        <dd>
            <?php echo $randomTrivia->correct_answer; ?>
       </dl>
</body>
</html>