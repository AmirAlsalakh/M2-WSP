<?php
mb_internal_encoding("UTF-8");

if (!isset($_POST['name'])) { // Kontrollerar att data kommer 
    header('Location:' . 'index.php');
}

$name = $_POST['name'];

if (!mb_check_encoding($name)) {
    echo "Fel format på texten";
}

$name = trim($name);
$name = strip_tags($name);
$name = stripslashes($name);

header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namn</title>

    <?php
    echo ("<p> Hej " . $name . "<p>");
    ?>
</head>

<body>

</body>

</html>