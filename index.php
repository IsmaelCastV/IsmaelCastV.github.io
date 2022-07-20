<!DOCTYPE html>
<?php

    require_once "pdo.php";


   //echo ("<p>Adding information...</p>");
    require_once "pdo.php";

    if( isset($_POST['oName']) && isset($_POST['pNum']) && isset($_POST['email']) && isset($_POST['rName'])
    && isset($_POST['rAdd']) && isset($_POST['pass']) ){

        $_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        echo ("<p>New Pass:".$_POST['pass']."</p>");

            $sql = "INSERT INTO restaurants(owner_name, phone_number, email, rest_name, rest_add, pwd_hash) 
                VALUES(:oName, :pNum, :email, :rName, :rAdd, :pass)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute(array(
                ':oName' => $_POST['oName'],
                ':pNum' => $_POST['pNum'],
                ':email' => $_POST['email'],
                ':rName' => $_POST['rName'],
                ':rAdd' => $_POST['rAdd'],
                ':pass' => $_POST['pass']));

        echo ("<p>$sql</p>");
        echo("<p>Registration Complete</p>");

        }

?>

<html>
        <head>
            <title> Title of test website </title>
        </head>

    <body>
        <form action=index.php method="post">
            <p>Name:<input type="text" name="oName" required></p>
            <p>Phone Number:<input type="number" name="pNum" required></p>
            <p>Email:<input type="email" name="email" required></p>
            <p>Restaurant Name:<input type="text" name="rName" required></p>
            <p>Restaurant Address:<input type="text" name="rAdd" required></p> 
            <p>Password:<input type="password" name="pass" required></p>
            <input type="submit" value="Confirm" class="confirm"></button> 
        </form>

    </body>

</html>
