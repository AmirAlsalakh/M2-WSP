<?php

class UserAuth
{
    private $filename;

    public function __construct($filename = "database.txt")
    {
        $this->filename = $filename;
    }

    public function login($uname, $password)
    {
        if (!file_exists($this->filename)) {
            return false;
        }

        $data = file($this->filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $user = [];
        foreach ($data as $line) {
            if (strpos($line, "-----------------") !== false) {
                if (isset($user['Användarnamn']) && $user['Användarnamn'] === $uname) {
                    if (isset($user['Lösenord']) && password_verify($password, $user['Lösenord'])) {
                        return $user; 
                    } else {
                        return false;
                    }
                }
                $user = [];
            } else {
                $parts = explode(": ", $line);
                if (count($parts) === 2) {
                    $user[$parts[0]] = $parts[1];
                }
            }
        }

        return false;
    }
}

$message = "";
if (!empty($_POST)) {
    $uname = $_POST['uname'] ?? "";
    $password = $_POST['password'] ?? "";

    $auth = new UserAuth();
    $user = $auth->login($uname, $password);

    if ($user) {
        $message = "<h2>Välkommen " . htmlspecialchars($user['Förnamn']) . " " . htmlspecialchars($user['Efternamn']) . "!</h2>";
        $message .= "<p>Ditt användarnamn är: " . htmlspecialchars($user['Användarnamn']) . "</p>";
    } else {
        $message = "<p style='color:red;'>Fel användarnamn eller lösenord.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Logga in</title>
</head>
<body>
    <h2>Logga in</h2>
    <form action="" method="POST">
        <label>Användarnamn</label><br>
        <input name="uname" type="text" required><br>

        <label>Lösenord</label><br>
        <input name="password" type="password" required><br><br>

        <input type="submit" value="Logga in">
    </form>

    <?php
        if ($message) {
            echo $message;
        }
    ?>
</body>
</html>