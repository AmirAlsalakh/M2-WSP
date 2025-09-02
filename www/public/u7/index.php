<?php

mb_internal_encoding("UTF-8");

function cleanData($data)
{
    $data = strip_tags($data);
    $data = stripslashes($data);
    return ($data);
}

header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Registrera användare</h2>

    <form action="index.php" method="POST">

        <label>Förnamn</label><br>
        <input name="fname" type="text" required><br>

        <label>Efternamn</label><br>
        <input name="lname" type="text" required><br>

        <label>Användarnamn</label><br>
        <input name="uname" type="text" required><br>

        <label>Lösenord</label><br>
        <input name="password" type="password" required><br><br>

        <input name="skicka" type="submit" value="Spara ditt konto">

    </form>
    <?php
    if (!empty($_POST)) {
        $fname = $_POST["fname"] ?? "";
        $lname = $_POST["lname"] ?? "";
        $uname = $_POST["uname"] ?? "";
        $password = $_POST["password"] ?? "";

        $fname = cleanData($fname) ?? "";
        $lname = cleanData($lname) ?? "";
        $uname = cleanData($uname) ?? "";

        $fname = htmlspecialchars($fname) ?? "";
        $lname = htmlspecialchars($lname) ?? "";
        $uname = htmlspecialchars($uname) ?? "";
        $password = htmlspecialchars($password) ?? "";

        $info["Förnamn"] = $fname;
        $info["Efternamn"] = $lname;
        $info["Användarnamn"] = $uname;
        $info["Lösenord"] = $password;


        foreach ($info as $key => $value) {
            echo "<p>$key: $value<p><br>";
        }

        $fname = "";
        $lname = "";
        $uname = "";
        $password = "";
    }

    ?>
</body>

</html>