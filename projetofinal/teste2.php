<?php
echo phpinfo();
exit();
try {
    $x = new PDO("mysql:host=localhost;dbname=tcc", "root", "root");
} catch (PDOException $exc) {
    echo $exc->getMessage();
}



