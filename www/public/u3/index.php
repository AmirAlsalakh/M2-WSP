<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativ.php" method="POST">
        
        <label>Tryck för att se den associotiva arrayen</label> <br>

        <input name="skicka" type="submit" value="ok">

    </form>
    <?php
    $page["head"] = "<h1>Välkommen</h1>";
    $page["main"] = "<p>Detta är innehållet på min sida</p>";
    $page["footer"] = "<hr><p>Min sidfoot</p>";

    foreach ($page as $key => $value) {
        echo ($key . ": " . $value);
        echo ("<br>");
    }


    ?>
</body>
</html>