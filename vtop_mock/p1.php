<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $title = "Title";
        echo("<title>".strtoupper($title)."</title>");
    ?>
</head>
<body>
    <?php
        $header = "<h1>Hey there!</h1>";
        $message = "Hello world!";
        echo($message);
        echo("<br>".strlen($message));
    ?>
</body>
</html>