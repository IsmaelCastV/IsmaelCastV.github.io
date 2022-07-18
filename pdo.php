<?php
    require_once "credentials.php";

    $pdo = new PDO("mysql:host=sql3.freesqldatabase.com;port=3306;dbname=$DB_NAME",
        $DB_NAME, $DB_PWD);

    //throws error if select if wrong
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>