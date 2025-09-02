<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Registrera användare</h2>

    <form action="accountMaker.php" method="POST">

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
</body>

</html>