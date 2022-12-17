<?php

    if ($_GET) {

        $name       = $_GET["name"]; 
        $lastname   = $_GET["lastname"]; 
        $birthday   = $_GET["birthday"]; 
        $phone      = $_GET["phone"]; 
        $web        = $_GET["web"]; 
        $email      = $_GET["email"]; 
        $facebook   = $_GET["facebook"]; 
        $twitter    = $_GET["twitter"]; 
        $googlePlus = $_GET["googlePlus"]; 
        $location   = $_GET["location"]; 
        $note       = $_GET["note"];

        include 'db.php';

        $data = [null, $name, $lastname, $birthday, $phone, $web, $email, $facebook, $twitter, $googlePlus, $location, $note];

        $insert = $db->prepare("insert into adres (id, name, lastname, birthday, phone, web, email, facebook, twitter, googlePlus, location, note) values (?,?,?,?,?,?,?,?,?,?,?,?)");

        $result = $insert->execute($data);

        if ($result) {
            echo "<script>alert('Kayıt işlemi başarılı..')</script><a href='list.php'>Listeye gitmek için tıklayınız</a>";
        } else {
            echo "<script>alert('Kayıt işlemi başarılı değil..')</script><a href='list.php'>Listeye gitmek için tıklayınız</a>";
        }


    }

?>