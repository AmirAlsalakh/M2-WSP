<?php
include("functions.php");

mb_internal_encoding("UTF-8");


$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmetik</title>

    <?php
    $division = div($n1,$n2);

    $sub = sub($n1,$n2);

    if($division){
    echo("<p> Divisionen och subtraktionen i respektiv ordning i tal blir: " . "<br>" . "För division: <br> " . $n1 . " / " . $n2 . " = " . $division . "<br> För subtraktion: <br>" . $n1 . " - " . $n2 . " = " . $sub);
    }else{
    echo("<p> Divisionen och subtraktionen i respektiv ordning i tal blir: " . "<br>" . "För division: <br> " . $n1 . " / " . $n2 . " = " . "Odefinierad" . "<br> För subtraktion: <br>" . $n1 . " - " . $n2 . " = " . $sub);
    }

    ?>
</head>

<body>

</body>

</html>