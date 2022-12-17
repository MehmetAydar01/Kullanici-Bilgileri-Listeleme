<?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=adres_defteri;charset=utf8", "mehmet", "1234");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>