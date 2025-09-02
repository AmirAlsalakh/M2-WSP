<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORWHILELOOP</title>
</head>

<body>
    <?php
    echo("<p> for loopen: <p>" . "<br>");
    for ($i = 1; $i < 5; $i = $i + 0.1) {
        echo ("<p>" . $i . "<p>" . "<br>");  
    }
    echo("<p> ----- <p>" . "<br>");
    echo("<p> while loopen: <p>" . "<br>");

    $i = 1;

    while($i<5){
        echo("<p>" .$i ."<p>" ."<br");
        $i = $i + 0.1;
    }
    ?>
</body>

</html>