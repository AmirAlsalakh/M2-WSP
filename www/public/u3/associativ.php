<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associativ ARRAY</title>

    <?php
    $page["head"] = "<h1>Välkommen</h1>";
    $page["main"] = "<p>Detta är innehållet på min sida</p>";
    $page["footer"] = "<hr><p>Min sidfoot</p>";

    foreach ($page as $key => $value) {
        echo ($key . ": " . $value);
        echo ("<br>");
    }


    ?>
</head>

<body>

</body>

</html>