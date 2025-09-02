<?php
mb_internal_encoding("UTF-8");

include("funktion.php");

if (!isset($_POST['fname'])) { // Kontrollerar att data kommer 
    header('Location:' . 'index.php');
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$password = $_POST['password'];

$fname = cleanData($fname);
$lname = cleanData($lname);
$uname = cleanData($uname);

$info["Förnamn"] = $fname;
$info["Efternamn"] = $lname;
$info["Usernamn"] = $uname;
$info["Lösenord"] = $password;


if (!mb_check_encoding($fname)) {
    echo "Fel format på texten";
}

$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);
$uname = htmlspecialchars($uname);
$password = htmlspecialchars($password);


header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Din information:</title>

    <h1>Din information:</h1>
    <br>
    <?php
    foreach ($info as $key => $value) {
        echo ($key . ": " . $value);
        echo ("<br>");
    }
    ?>
</head>

<body>

</body>

</html>