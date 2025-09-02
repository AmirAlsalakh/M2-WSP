<?php

class User
{
    public $fname;
    public $lname;
    public $uname;
    public $password;

    public function __construct($fname, $lname, $uname, $password)
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

    public function save($filename = "database.txt")
    {
        $output = "Förnamn: " . $this->fname . "\n";
        $output .= "Efternamn: " . $this->lname . "\n";
        $output .= "Användarnamn: " . $this->uname . "\n";
        $output .= "Lösenord: " . $this->password . "\n";
        $output .= "-----------------\n";

        file_put_contents($filename, $output, FILE_APPEND);
    }
}

if (!empty($_POST)) {
    $fname = $_POST["fname"] ?? "";
    $lname = $_POST["lname"] ?? "";
    $uname = $_POST["uname"] ?? "";
    $password = $_POST["password"] ?? "";

    $user = new User($fname, $lname, $uname, $password);
    $user->save();

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
</body>

</html>