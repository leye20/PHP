<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Quotes</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION["quotes"] = array(
        "You're gonna need a bigger boat. <br /> <br />",
        "May the Force be with you... always. <br /> <br />",
        "I'm as mad as hell, and I'm not going to take it anymore! <br /> <br />",
        "You talkin' to me? <br /> <br />",
        "I'll make him an offer he can't refuse. <br /> <br />",
        "Yo, Adrian! <br /> <br />",
        " Your asking me how smart I am?! OK, I'll tell you - Let me put it this way, have you ever heard of Plato, Aristotle, Socrates? <br /> Yes <br /> MORONS! ALL OF THEM!!  <br /> <br />"
    );
    ?>
    <h1>TechCareers Favourite Films</h1>
    <form action="" method="GET">
        Enter a number: <input type="text" name="quote-number">
        <input type="submit">
    </form>
    <p><?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if ($_GET["quote-number"] < 0 || $_GET["quote-number"] > 6)
                echo "No quote found for that number.";
            else {
                $i = $_GET["quote-number"];
                while ($i < sizeof($_SESSION["quotes"])) {
                    echo $_SESSION["quotes"][$i];
                    $i++;
                }

                /*for ($i = $_GET["quote-number"]; $i < sizeof($quotes); $i++) {
                    echo $quotes[$i];
                }*/

            }
        }
            //echo $quotes[$_GET["quote-number"]];
    ?></p>

    <form action="" method="POST">
        Add a New Quote: <input type="text" name="new-quote">
        <input type="submit">
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            array_push($_SESSION["quotes"], $_POST["new-quote"]);
            for ($i = 0; $i < sizeof($_SESSION["quotes"]); $i++) {
                echo $_SESSION["quotes"][$i];
            }
        }
    ?>
</body>
</html>