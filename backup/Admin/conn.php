<?php
try { // if something goes wrong, an exception is thrown
        $servername="blitz.cs.niu.edu";
        $username="student";
        $password="student";
        $dsn = "mysql:host=$servername; dbname=csci467";
        $pdo = new PDO($dsn, $username, $password);
}
catch(PDOexception $e) { // handle that exception
        echo "Connection to database failed: ";
        echo $e->getMessage();
        exit();
}
?>

