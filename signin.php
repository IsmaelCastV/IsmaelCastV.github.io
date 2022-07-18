<?php

    require_once "pdo.php";

    echo ("<h1>Sign In</h1>");

    if(isset($_POST['email']) && isset($_POST['pass'])){

        $sql = "SELECT pwd_hash FROM restaurants WHERE email = :email";

        $stmt = $pdo->prepare($sql);

    $stmt->execute(array(
        ':email' => $_POST['email'],));

    if(password_verify($_POST['pass'],$stmt->fetch()['pwd_hash'] )){
        echo ('Password Correct');
    }
    else{
        echo ("Password Incorrect");
    }

echo ("<p>$sql</p>");

        echo ($stmt->fetch()['pwd_hash']);
echo("<p>Registration Complete</p>");

    }

?>