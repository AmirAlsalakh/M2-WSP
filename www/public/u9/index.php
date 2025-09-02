<?php

class User
{
    public $fname;
    public $lname;
    public $uname;
    public $password;
    public $filename = "database.txt";

    public function saveData($fname, $lname, $uname, $password)
    {
        $this->fname = $this->cleanData($fname);
        $this->lname = $this->cleanData($lname);
        $this->uname = $this->cleanData($uname);
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    private function cleanData($data)
    {
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function save($fname, $lname, $uname, $password)
    {
        $this->saveData($fname, $lname, $uname, $password);
        $output = "Förnamn: " . $this->fname . "\n";
        $output .= "Efternamn: " . $this->lname . "\n";
        $output .= "Användarnamn: " . $this->uname . "\n";
        $output .= "Lösenord: " . $this->password . "\n";
        $output .= "-----------------\n";

        file_put_contents($this->filename, $output, FILE_APPEND);
    }
}

if (!empty($_POST)) {
    $fname = $_POST["fname"] ?? "";
    $lname = $_POST["lname"] ?? "";
    $uname = $_POST["uname"] ?? "";
    $password = $_POST["password"] ?? "";

    $user = new User();
    $user->save($fname, $lname, $uname, $password);

    echo "<p>Användaren har sparats!</p>";
}
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Registrering</title>
</head>

<body>
    <h2>Registrera användare</h2>
    <form action="" method="POST">
        <label>Förnamn</label><br>
        <input name="fname" type="text" required><br>

        <label>Efternamn</label><br>
        <input name="lname" type="text" required><br>

        <label>Användarnamn</label><br>
        <input name="uname" type="text" required><br>

        <label>Lösenord</label><br>
        <input name="password" type="password" required><br><br>

        <input type="submit" value="Spara">
    </form>

    <h2>Tryck knappen för att logga in om du hade ett konto istället</h2>
    <form action="logIn.php" method="POST">

        <input type="submit" value="Tryck här för att logga in">
    </form>
</body>

</html>