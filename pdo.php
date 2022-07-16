<?php
    require_once "credentials.php";

    $pdo = new PDO("mysql:host=sql3.freesqldatabase.com;port=3306;dbname=${{secrets.DB_NAME}}",
        ${{secrets.DB_NAME}}, ${{secrets.DB_PWD}});

    //throws error if select if wrong
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>